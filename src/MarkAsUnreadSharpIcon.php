<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['as', 'envelop', 'letter', 'mail', 'mark', 'post', 'postal', 'read', 'receive', 'send', 'unread'],
)]
final class MarkAsUnreadSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPolygon(points: [[16.23, 7], [20.35, 7], [10.5, 2], [2, 6.21], [2, 17], [4, 17], [4, 7.4], [10.5, 4]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M5,8v13h17V8H5z M20,12l-6.5,3.33L7,12v-2l6.5,3.33L20,10V12z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
