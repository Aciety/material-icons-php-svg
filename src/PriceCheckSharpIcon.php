<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['approve', 'bill', 'card', 'cash', 'check', 'coin', 'commerce', 'complete', 'cost', 'credit', 'currency', 'dollars', 'done', 'finance', 'mark', 'money', 'ok', 'online', 'pay', 'payment', 'price', 'select', 'shopping', 'symbol', 'tick', 'validate', 'verified', 'yes'],
)]
final class PriceCheckSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPolygon(points: [[11, 8], [6, 8], [6, 6], [11, 6], [11, 4], [8.5, 4], [8.5, 3], [6.5, 3], [6.5, 4], [4, 4], [4, 10], [9, 10], [9, 12], [4, 12], [4, 14], [6.5, 14], [6.5, 15], [8.5, 15], [8.5, 14], [11, 14]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[19.59, 12.52], [13.93, 18.17], [11.1, 15.34], [9.69, 16.76], [13.93, 21], [21, 13.93]]);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
