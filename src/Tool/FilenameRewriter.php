<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons\Tool;

use SplFileInfo;

interface FilenameRewriter
{
    /**
     * Must return file name with `.php` extension.
     */
    public function rewrite(SplFileInfo $file): string;
}
