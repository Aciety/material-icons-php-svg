<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['+', 'add', 'analytics', 'bar', 'bars', 'chart', 'data', 'diagram', 'graph', 'infographic', 'measure', 'metrics', 'new', 'plus', 'statistics', 'symbol', 'tracking'],
)]
final class AddChartRoundedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M16,17c0.55,0,1-0.45,1-1v-2c0-0.55-0.45-1-1-1s-1,0.45-1,1v2C15,16.55,15.45,17,16,17z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M20,10c-0.55,0-1,0.45-1,1v8H5V5h8c0.55,0,1-0.45,1-1s-0.45-1-1-1H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14 c1.1,0,2-0.9,2-2v-8C21,10.45,20.55,10,20,10z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M7,11v5c0,0.55,0.45,1,1,1s1-0.45,1-1v-5c0-0.55-0.45-1-1-1S7,10.45,7,11z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M11,8v8c0,0.55,0.45,1,1,1s1-0.45,1-1V8c0-0.55-0.45-1-1-1S11,7.45,11,8z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M16,7h1v1c0,0.55,0.45,1,1,1s1-0.45,1-1V7h1c0.55,0,1-0.45,1-1s-0.45-1-1-1h-1V4c0-0.55-0.45-1-1-1s-1,0.45-1,1v1h-1 c-0.55,0-1,0.45-1,1S15.45,7,16,7z');
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
