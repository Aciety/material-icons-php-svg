<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['approve', 'bill', 'card', 'cash', 'check', 'coin', 'commerce', 'complete', 'cost', 'credit', 'currency', 'dollars', 'done', 'finance', 'mark', 'money', 'ok', 'online', 'pay', 'payment', 'price', 'select', 'shopping', 'symbol', 'tick', 'validate', 'verified', 'yes'],
)]
final class PriceCheckOutlinedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M11,13V9c0-0.55-0.45-1-1-1H6V6h5V4H8.5V3h-2v1H5C4.45,4,4,4.45,4,5v4c0,0.55,0.45,1,1,1h4v2H4v2h2.5v1h2v-1H10 C10.55,14,11,13.55,11,13z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[19.59, 12.52], [13.93, 18.17], [11.1, 15.34], [9.69, 16.76], [13.93, 21], [21, 13.93]]);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
