<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['account', 'balance', 'bank', 'bill', 'card', 'cash', 'coin', 'commerce', 'credit', 'currency', 'dollars', 'finance', 'money', 'online', 'pay', 'payment'],
)]
final class AccountBalanceIcon extends SvgIcon
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
        $l2I0 = new SVGRect(x: '4', y: '10', width: '3', height: '7');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '10.5', y: '10', width: '3', height: '7');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '2', y: '19', width: '20', height: '3');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '17', y: '10', width: '3', height: '7');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPolygon(points: [[12, 1], [2, 6], [2, 8], [22, 8], [22, 6]]);
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
