<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

final class RotateLeftTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M13 17.91v2.02c3.95-.49 7-3.85 7-7.93s-3.05-7.44-7-7.93V1L8.45 5.55 13 10V6.09c2.84.48 5 2.94 5 5.91s-2.16 5.43-5 5.91zm-7.31-1.02l1.41-1.42c-.52-.75-.87-1.59-1.01-2.47H4.07c.17 1.39.72 2.73 1.62 3.89zm1.42-8.36L5.7 7.11C4.8 8.27 4.24 9.61 4.07 11h2.02c.14-.87.49-1.72 1.02-2.47zM11 17.9c-.87-.15-1.71-.49-2.46-1.03L7.1 18.32c1.16.9 2.51 1.44 3.9 1.61V17.9z');
        $doc->addChild($l0I1);
    }
}