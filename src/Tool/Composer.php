<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons\Tool;

use Composer\Script\Event;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;

use function count;
use function is_array;
use function sprintf;

final class Composer
{
    public static function cleanup(
        Event $event,
        ?Filesystem $filesystem = null,
    ): void {
        $composer = $event->getComposer();
        $extra = $composer->getPackage()->getExtra();
        $icons = isset($extra['aciety/material-icons']) && is_array($extra['aciety/material-icons']) ? $extra['aciety/material-icons'] : [];
        if (!isset($icons['exclude']) || !is_array($icons['exclude'])) {
            $icons['exclude'] = [];
        }

        if (count($icons['exclude']) === 0) {
            return;
        }

        $vendorDir = $composer->getConfig()->get('vendor-dir');
        $iconsDir = $vendorDir.'/aciety/material-icons/src';

        $finder = (new Finder())
            ->files()
            ->depth('== 0')
            ->in($iconsDir)
            ->name($icons['exclude']);

        if (($count = count($finder)) === 0) {
            return;
        }

        $event->getIO()->write(sprintf('Removing %d %s from "%s" package.', $count, $count > 1 ? 'icons' : 'icon', 'aciety/material-icons'));

        $filesystem = $filesystem ?? new Filesystem();

        foreach ($finder as $file) {
            $filesystem->remove($file->getPathname());
        }
    }
}
