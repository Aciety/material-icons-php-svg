<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

final class CropFreeTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M3 19c0 1.1.9 2 2 2h4v-2H5v-4H3v4zM21 5c0-1.1-.9-2-2-2h-4v2h4v4h2V5zM5 5h4V3H5c-1.1 0-2 .9-2 2v4h2V5zm16 14v-4h-2v4h-4v2h4c1.1 0 2-.9 2-2z');
        $doc->addChild($l0I1);
    }
}
