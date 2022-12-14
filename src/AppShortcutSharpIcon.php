<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['app', 'bookmarked', 'favorite', 'highlight', 'important', 'marked', 'mobile', 'save', 'saved', 'shortcut', 'software', 'special', 'star'],
)]
final class AppShortcutSharpIcon extends SvgIcon
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
        $l2I0 = new SVGPolygon(points: [[17, 18], [7, 18], [7, 6], [17, 6], [17, 7], [19, 7], [19, 1], [5, 1], [5, 1], [5, 23], [19, 23], [19, 17], [17, 17]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[20.38, 9.619999999999999], [21, 11], [21.62, 9.619999999999999], [23, 9], [21.62, 8.380000000000001], [21, 7], [20.38, 8.380000000000001], [19, 9]]);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[16, 8], [14.75, 10.75], [12, 12], [14.75, 13.25], [16, 16], [17.25, 13.25], [20, 12], [17.25, 10.75]]);
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPolygon(points: [[21, 13], [20.38, 14.38], [19, 15], [20.38, 15.62], [21, 17], [21.62, 15.62], [23, 15], [21.62, 14.38]]);
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
