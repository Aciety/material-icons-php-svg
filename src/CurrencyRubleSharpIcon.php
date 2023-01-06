<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['image'],
    tags: ['bill', 'card', 'cash', 'coin', 'commerce', 'cost', 'credit', 'currency', 'dollars', 'finance', 'money', 'online', 'pay', 'payment', 'price', 'ruble', 'shopping', 'symbol'],
)]
final class CurrencyRubleSharpIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M13.5,3H7v9H5v2h2v2H5v2h2v3h2v-3h4v-2H9v-2h4.5c3.04,0,5.5-2.46,5.5-5.5C19,5.46,16.54,3,13.5,3z M13.5,12H9V5h4.5 C15.43,5,17,6.57,17,8.5S15.43,12,13.5,12z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
