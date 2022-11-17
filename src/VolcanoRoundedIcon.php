<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['crisis', 'disaster', 'eruption', 'lava', 'magma', 'natural', 'volcano'],
)]
final class VolcanoRoundedIcon extends SVG
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
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M16.49,8h-4.14c-0.82,0-1.55,0.5-1.86,1.26L9,13H7.3c-0.79,0-1.51,0.47-1.83,1.19l-2.22,5C2.66,20.51,3.63,22,5.08,22 h14.27c1.33,0,2.29-1.27,1.92-2.55l-2.86-10C18.17,8.59,17.38,8,16.49,8z');
        $l2I0->addChild($l3I0);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M14,1L14,1c-0.55,0-1,0.45-1,1v2c0,0.55,0.45,1,1,1h0c0.55,0,1-0.45,1-1V2C15,1.45,14.55,1,14,1z');
        $l2I1->addChild($l3I0);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M19.66,3.34L19.66,3.34c-0.39-0.39-1.02-0.39-1.41,0l-1.41,1.41c-0.39,0.39-0.39,1.02,0,1.41v0 c0.39,0.39,1.02,0.39,1.41,0l1.41-1.41C20.05,4.37,20.05,3.73,19.66,3.34z');
        $l2I2->addChild($l3I0);
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M11.17,4.76L9.76,3.34c-0.39-0.39-1.02-0.39-1.41,0l0,0c-0.39,0.39-0.39,1.02,0,1.41l1.41,1.41 c0.39,0.39,1.02,0.39,1.41,0l0,0C11.56,5.78,11.56,5.15,11.17,4.76z');
        $l2I3->addChild($l3I0);
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
