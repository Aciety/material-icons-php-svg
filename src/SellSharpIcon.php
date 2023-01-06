<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['bill', 'card', 'cart', 'cash', 'coin', 'commerce', 'credit', 'currency', 'dollars', 'money', 'online', 'pay', 'payment', 'price', 'sell', 'shopping', 'tag'],
)]
final class SellSharpIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M22.83,12.83L12,2H2v10l10.83,10.83L22.83,12.83z M6.5,8C5.67,8,5,7.33,5,6.5S5.67,5,6.5,5S8,5.67,8,6.5S7.33,8,6.5,8z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
