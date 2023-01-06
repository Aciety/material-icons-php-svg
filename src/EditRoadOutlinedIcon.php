<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['destination', 'direction', 'edit', 'highway', 'maps', 'pen', 'pencil', 'road', 'street', 'traffic'],
)]
final class EditRoadOutlinedIcon extends SvgIcon
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
        $l2I0 = new SVGPolygon(points: [[18, 4], [16, 4], [16, 11.9], [18, 9.9]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '4', y: '4', width: '2', height: '16');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '10', y: '4', width: '2', height: '4');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '10', y: '10', width: '2', height: '4');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGRect(x: '10', y: '16', width: '2', height: '4');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M22.56,12.59l-1.15-1.15c-0.59-0.59-1.54-0.59-2.12,0L14,16.73V20h3.27l5.29-5.29C23.15,14.12,23.15,13.17,22.56,12.59z M16.58,18.45h-1.03v-1.03L19,13.97L20.03,15L16.58,18.45z');
        $l1I0->addChild($l2I5);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
