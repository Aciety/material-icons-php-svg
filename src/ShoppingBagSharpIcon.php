<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['bag', 'bill', 'business', 'buy', 'card', 'cart', 'cash', 'coin', 'commerce', 'credit', 'currency', 'dollars', 'money', 'online', 'pay', 'payment', 'shop', 'shopping', 'store', 'storefront'],
)]
final class ShoppingBagSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M20 6h-4c0-2.21-1.79-4-4-4S8 3.79 8 6H4v16h16V6zm-10 5H8V8h2v3zm2-7c1.1 0 2 .9 2 2h-4c0-1.1.9-2 2-2zm4 7h-2V8h2v3z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
