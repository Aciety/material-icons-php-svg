<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['image'],
    tags: ['A', 'alphabet', 'auto', 'character', 'font', 'fps', 'frame', 'frequency', 'letter', 'per', 'rate', 'second', 'seconds', 'select', 'symbol', 'text', 'type'],
)]
final class AutofpsSelectOutlinedIcon extends SvgIcon
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
        $l2I0 = new SVGPolygon(points: [[12.03, 6.3], [11.97, 6.3], [10.95, 9.19], [13.05, 9.19]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '3', y: '17', width: '2', height: '5');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M12,15c3.31,0,6-2.69,6-6s-2.69-6-6-6S6,5.69,6,9S8.69,15,12,15z M11.37,5h1.25l2.63,7h-1.21l-0.63-1.79h-2.83L9.96,12 H8.74L11.37,5z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '7', y: '17', width: '2', height: '5');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGRect(x: '11', y: '17', width: '2', height: '5');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGRect(x: '15', y: '17', width: '6', height: '5');
        $l1I0->addChild($l2I5);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
