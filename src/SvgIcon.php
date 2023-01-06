<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\SVG;

abstract class SvgIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
    }
}
