<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class GridViewTwoToneIcon extends SVG
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
        $l2I0 = new SVGRect(x: '5', y: '5', width: '4', height: '4');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '5', y: '15', width: '4', height: '4');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '15', y: '15', width: '4', height: '4');
        $l2I2->setStyle('opacity', '.3');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '15', y: '5', width: '4', height: '4');
        $l2I3->setStyle('opacity', '.3');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M3,21h8v-8H3V21z M5,15h4v4H5V15z');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M3,11h8V3H3V11z M5,5h4v4H5V5z');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGPath(d: 'M13,21h8v-8h-8V21z M15,15h4v4h-4V15z');
        $l1I0->addChild($l2I6);
        $l2I7 = new SVGPath(d: 'M13,3v8h8V3H13z M19,9h-4V5h4V9z');
        $l1I0->addChild($l2I7);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
