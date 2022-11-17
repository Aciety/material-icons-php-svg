<?php

declare(strict_types=1);

use Aciety\Component\MaterialIcons\Tool\IconBuilder;
use Aciety\Component\MaterialIcons\Tool\IconDownloader;
use Aciety\Component\MaterialIcons\Tool\MuiFilenameRewriter;
use SVG\SVG;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\SingleCommandApplication;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Filesystem\Filesystem;

require __DIR__.'/../vendor/autoload.php';

(new SingleCommandApplication())
    ->setName('Material Icon Builder')
    ->setVersion('0.1')
    ->addOption(name: 'src-dir', mode: InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY, default: ['icons', 'icons/custom'], description: 'Directory where to look for icon source files')
    ->addOption(name: 'build-dir', mode: InputOption::VALUE_REQUIRED, default: 'src', description: 'Directory where to output build php svg icon files.')
    ->setCode(static function (InputInterface $input, OutputInterface $output): int {
        $io = new SymfonyStyle($input, $output);

        /** @var list<string> $srcDir */
        $srcDir = $input->getOption('src-dir');
        $buildDir = $input->getOption('build-dir');

        (new Filesystem())->remove(glob($buildDir.'/*.php'));

        /** @var AppendIterator<SplFileInfo> $categoriesIterator */
        $categoriesIterator = new AppendIterator();
        /** @var AppendIterator<SplFileInfo> $tagsIterator */
        $tagsIterator = new AppendIterator();
        /** @var AppendIterator<SplFileInfo> $svgIconIterator */
        $svgIconIterator = new AppendIterator();

        foreach ($srcDir as $dir) {
            $categoriesIterator->append(new RegexIterator(new DirectoryIterator($dir), '/^_categories\.json$/'));
            $tagsIterator->append(new RegexIterator(new DirectoryIterator($dir), '/^_tags\.json$/'));
            $svgIconIterator->append(new RegexIterator(new DirectoryIterator($dir), '/\.svg$/'));
        }

        $allCategories = [];
        foreach ($categoriesIterator as $categoriesFile) {
            $categoriesContent = file_get_contents($categoriesFile->getPathname());

            if ($categoriesContent === false) {
                throw new RuntimeException(sprintf('Failed to read "%s" file.', $categoriesFile->getPathname()));
            }

            $allCategories[] = json_decode(json: $categoriesContent, associative: true, flags: JSON_THROW_ON_ERROR);
        }
        $allCategories = array_merge(...$allCategories);

        $allTags = [];
        foreach ($tagsIterator as $tagsFile) {
            $tagsContent = file_get_contents($tagsFile->getPathname());

            if ($tagsContent === false) {
                throw new RuntimeException(sprintf('Failed to read "%s" file.', $tagsFile->getPathname()));
            }

            $allTags[] = json_decode(json: $tagsContent, associative: true, flags: JSON_THROW_ON_ERROR);
        }
        $allTags = array_merge(...$allTags);

        $rewriter = new MuiFilenameRewriter();
        $iconBuilder = new IconBuilder();

        $progressBar = $io->createProgressBar($count = iterator_count($svgIconIterator));
        $progressBar->setFormat('debug');
        $progressBar->start();

        foreach ($svgIconIterator as $fileinfo) {
            $originalIcon = str_replace(array_values(IconDownloader::THEME_FILE_MAP), '', $fileinfo->getBasename('_24px.svg'));

            $fileName = $rewriter->rewrite($fileinfo);
            $iconName = substr($fileName, 0, -4);

            $svg = SVG::fromFile($fileinfo->getPathname());
            $categories = $allCategories[$originalIcon] ?? [];
            $tags = $allTags[$originalIcon] ?? [];

            file_put_contents($buildDir.'/'.$fileName, $iconBuilder->build($svg, $iconName, $categories, $tags));

            $progressBar->advance();
        }

        $progressBar->finish();

        $io->success(sprintf('Successfully built "%d" icons.', $count));

        return 0;
    })
    ->run();
