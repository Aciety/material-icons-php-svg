<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class VerticalShadesClosedTwoToneIcon extends SVG
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGRect(x: '9.5', y: '5', width: '1.5', height: '14');
        $l2I0->setStyle('opacity', '.2');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '6', y: '5', width: '1.5', height: '14');
        $l2I1->setStyle('opacity', '.2');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '13', y: '5', width: '1.5', height: '14');
        $l2I2->setStyle('opacity', '.2');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '16.5', y: '5', width: '1.5', height: '14');
        $l2I3->setStyle('opacity', '.2');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M20,19V3H4v16H2v2h20v-2H20z M7.5,19H6V5h1.5V19z M11,19H9.5V5H11V19z M14.5,19H13V5h1.5V19z M18,19h-1.5V5H18V19z');
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
