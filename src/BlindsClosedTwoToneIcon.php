<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['home'],
    tags: ['blinds', 'closed', 'cover', 'curtains', 'nest', 'shade', 'shutter', 'sunshade'],
)]
final class BlindsClosedTwoToneIcon extends SVG
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
        $l2I0 = new SVGRect(x: '6', y: '5', width: '8', height: '2');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '6', y: '9', width: '8', height: '2');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '16', y: '17', width: '2', height: '2');
        $l2I2->setStyle('opacity', '.3');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '6', y: '13', width: '8', height: '2');
        $l2I3->setStyle('opacity', '.3');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGRect(x: '6', y: '17', width: '8', height: '2');
        $l2I4->setStyle('opacity', '.3');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGRect(x: '16', y: '13', width: '2', height: '2');
        $l2I5->setStyle('opacity', '.3');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGRect(x: '16', y: '5', width: '2', height: '2');
        $l2I6->setStyle('opacity', '.3');
        $l1I0->addChild($l2I6);
        $l2I7 = new SVGRect(x: '16', y: '9', width: '2', height: '2');
        $l2I7->setStyle('opacity', '.3');
        $l1I0->addChild($l2I7);
        $l2I8 = new SVGPath(d: 'M20,19V3H4v16H2v2h11.25c0,0.97,0.78,1.75,1.75,1.75s1.75-0.78,1.75-1.75H22v-2H20z M14,19H6v-2h8V19z M14,15H6v-2h8V15z M14,11H6V9h8V11z M14,7H6V5h8V7z M18,19h-2v-2h2V19z M18,15h-2v-2h2V15z M18,11h-2V9h2V11z M18,7h-2V5h2V7z');
        $l1I0->addChild($l2I8);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
