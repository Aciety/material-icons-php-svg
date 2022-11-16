<?php

declare(strict_types=1);

use Aciety\Component\MaterialIcons\Tool\IconDownloader;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\SingleCommandApplication;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpClient\RetryableHttpClient;

require __DIR__.'/../vendor/autoload.php';

(new SingleCommandApplication())
    ->setName('Material Icon Downloader')
    ->setVersion('0.1')
    ->addOption(name: 'output-dir', mode: InputOption::VALUE_REQUIRED, default: 'icons', description: 'Directory where to download the icons')
    ->setCode(static function (InputInterface $input, OutputInterface $output) {
        $io = new SymfonyStyle($input, $output);

        /** @var string $outputDir */
        $outputDir = $input->getOption('output-dir');
        if ($outputDir === '') {
            throw new LogicException('Expected non empty `output-dir`.');
        }

        $httpClient = new RetryableHttpClient(HttpClient::create());

        $downloader = new IconDownloader($httpClient);
        $downloader->download($outputDir);

        $io->success(sprintf('Icons successfully downloaded to "%s".', $outputDir));
    })
    ->run();
