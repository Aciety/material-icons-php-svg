<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class FilterListOffIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M10.83,8H21V6H8.83L10.83,8z M15.83,13H18v-2h-4.17L15.83,13z M14,16.83V18h-4v-2h3.17l-3-3H6v-2h2.17l-3-3H3V6h0.17 L1.39,4.22l1.41-1.41l18.38,18.38l-1.41,1.41L14,16.83z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
