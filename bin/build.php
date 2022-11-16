<?php

declare(strict_types=1);

use Aciety\Component\MaterialIcons\Tool\IconBuilder;
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
    ->setCode(static function (InputInterface $input, OutputInterface $output) {
        $io = new SymfonyStyle($input, $output);

        /** @var list<string> $srcDir */
        $srcDir = $input->getOption('src-dir');
        $buildDir = $input->getOption('build-dir');

        (new Filesystem())->remove(glob($buildDir.'/*.php'));

        $iterator = new AppendIterator();

        foreach ($srcDir as $dir) {
            $iterator->append(new RegexIterator(new DirectoryIterator($dir), '/\.svg$/'));
        }

        $rewriter = new MuiFilenameRewriter();
        $iconBuilder = new IconBuilder();

        $progressBar = $io->createProgressBar($count = iterator_count($iterator));
        $progressBar->setFormat('debug');
        $progressBar->start();

        foreach ($iterator as $fileinfo) {
            $fileName = $rewriter->rewrite($fileinfo);
            $iconName = substr($fileName, 0, -4);

            $svg = SVG::fromFile($fileinfo->getPathname());

            file_put_contents($buildDir.'/'.$fileName, $iconBuilder->build($svg, $iconName));

            $progressBar->advance();
        }

        $progressBar->finish();

        $io->success(sprintf('Successfully built "%d" icons.', $count));
    })
    ->run();
