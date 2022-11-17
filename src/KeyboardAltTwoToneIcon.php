<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['hardware'],
    tags: ['alt', 'computer', 'device', 'hardware', 'input', 'keyboard', 'keypad', 'letter', 'office', 'text', 'type'],
)]
final class KeyboardAltTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: '0', width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M3,19h18V6H3V19z M17,8h2v2h-2V8z M17,12h2v2h-2V12z M13,8h2v2h-2V8z M13,12h2 v2h-2V12z M9,8h2v2H9V8z M9,12h2v2H9V12z M8,16h8v1H8V16z M5,8h2v2H5V8z M5,12h2v2H5V12z');
        $l2I0->setStyle('enable-background', 'new');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M21,4H3C1.9,4,1,4.9,1,6v13c0,1.1,0.9,2,2,2h18c1.1,0,2-0.9,2-2V6C23,4.9,22.1,4,21,4z M21,19H3V6h18V19z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '9', y: '8', width: '2', height: '2');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '5', y: '8', width: '2', height: '2');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGRect(x: '8', y: '16', width: '8', height: '1');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGRect(x: '13', y: '8', width: '2', height: '2');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGRect(x: '9', y: '12', width: '2', height: '2');
        $l1I0->addChild($l2I6);
        $l2I7 = new SVGRect(x: '5', y: '12', width: '2', height: '2');
        $l1I0->addChild($l2I7);
        $l2I8 = new SVGRect(x: '13', y: '12', width: '2', height: '2');
        $l1I0->addChild($l2I8);
        $l2I9 = new SVGRect(x: '17', y: '8', width: '2', height: '2');
        $l1I0->addChild($l2I9);
        $l2I10 = new SVGRect(x: '17', y: '12', width: '2', height: '2');
        $l1I0->addChild($l2I10);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
