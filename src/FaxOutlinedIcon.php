<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['fax', 'machine', 'office', 'phone', 'send'],
)]
final class FaxOutlinedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M19,9h-1V4H8v5H7.22C6.67,8.39,5.89,8,5,8c-1.66,0-3,1.34-3,3v7c0,1.66,1.34,3,3,3c0.89,0,1.67-0.39,2.22-1H22v-8 C22,10.34,20.66,9,19,9z M6,18c0,0.55-0.45,1-1,1s-1-0.45-1-1v-7c0-0.55,0.45-1,1-1s1,0.45,1,1V18z M10,6h6v3h-6V6z M20,18H8v-7 h11c0.55,0,1,0.45,1,1V18z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '15', cy: '13', r: '1');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGCircle(cx: '18', cy: '13', r: '1');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGCircle(cx: '15', cy: '16', r: '1');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGCircle(cx: '18', cy: '16', r: '1');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGGroup();
        $l3I0 = new SVGRect(x: '9', y: '12', width: '4', height: '5');
        $l2I5->addChild($l3I0);
        $l1I0->addChild($l2I5);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
