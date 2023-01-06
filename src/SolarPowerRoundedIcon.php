<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['home'],
    tags: ['eco', 'energy', 'heat', 'nest', 'power', 'solar', 'sun', 'sunny'],
)]
final class SolarPowerRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
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
        $l2I0 = new SVGPath(d: 'M3.33,16H11v-3H5.6c-0.94,0-1.75,0.65-1.95,1.57L3.33,16z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M13,16h7.67l-0.32-1.43C20.14,13.65,19.33,13,18.4,13H13V16z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M21.11,18H13v4h6.51c1.28,0,2.23-1.18,1.95-2.43L21.11,18z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M4.49,22H11v-4H2.89l-0.35,1.57C2.26,20.82,3.21,22,4.49,22z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M12,8L12,8c-0.55,0-1,0.45-1,1v1c0,0.55,0.45,1,1,1h0c0.55,0,1-0.45,1-1V9C13,8.45,12.55,8,12,8z');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M18.59,8.62L18.59,8.62c0.39-0.39,0.39-1.02,0-1.41L17.88,6.5c-0.39-0.39-1.02-0.39-1.41,0v0c-0.39,0.39-0.39,1.02,0,1.41 l0.71,0.71C17.57,9.01,18.2,9.01,18.59,8.62z');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGPath(d: 'M6.82,8.62l0.71-0.71c0.39-0.39,0.39-1.02,0-1.41l0,0c-0.39-0.39-1.02-0.39-1.41,0L5.41,7.2c-0.39,0.39-0.39,1.02,0,1.41 l0,0C5.8,9.01,6.43,9.01,6.82,8.62z');
        $l1I0->addChild($l2I6);
        $l2I7 = new SVGPath(d: 'M5,2H4C3.45,2,3,2.45,3,3v0c0,0.55,0.45,1,1,1h1c0.55,0,1-0.45,1-1v0C6,2.45,5.55,2,5,2z');
        $l1I0->addChild($l2I7);
        $l2I8 = new SVGPath(d: 'M20,2h-1c-0.55,0-1,0.45-1,1v0c0,0.55,0.45,1,1,1h1c0.55,0,1-0.45,1-1v0C21,2.45,20.55,2,20,2z');
        $l1I0->addChild($l2I8);
        $l2I9 = new SVGPath(d: 'M12,7c2.76,0,5-2.24,5-5H7C7,4.76,9.24,7,12,7z');
        $l1I0->addChild($l2I9);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
