<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class ShortcutOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M15,5l-1.41,1.41L15,7.83L17.17,10H8c-2.76,0-5,2.24-5,5v4h2v-4c0-1.65,1.35-3,3-3h9.17L15,14.17l-1.41,1.41L15,17l6-6 L15,5z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
