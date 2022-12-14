<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['break', 'doc', 'document', 'file', 'page', 'paper'],
)]
final class InsertPageBreakIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M4,20c0,1.1,0.89,2,1.99,2H18c1.1,0,2-0.9,2-2v-3H4L4,20z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M20,8l-6-6H6C4.9,2,4.01,2.9,4.01,4l0,7H20V8z M13,9V3.5L18.5,9H13z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '9', y: '13', width: '6', height: '2');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '17', y: '13', width: '6', height: '2');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGRect(x: '1', y: '13', width: '6', height: '2');
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
