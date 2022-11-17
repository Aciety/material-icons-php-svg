<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['100', 'bill', 'card', 'cash', 'coin', 'commerce', 'cost', 'credit', 'currency', 'digit', 'dollars', 'finance', 'money', 'number', 'online', 'pay', 'payment', 'price', 'shopping', 'symbol'],
)]
final class MoneyTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M10 10h1v4h-1zm6 0h1v4h-1zM4 18h16V6H4v12zm10-9c0-.55.45-1 1-1h3c.55 0 1 .45 1 1v6c0 .55-.45 1-1 1h-3c-.55 0-1-.45-1-1V9zM8 9c0-.55.45-1 1-1h3c.55 0 1 .45 1 1v6c0 .55-.45 1-1 1H9c-.55 0-1-.45-1-1V9zM5 8h2v8H5V8z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M15 16h3c.55 0 1-.45 1-1V9c0-.55-.45-1-1-1h-3c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1zm1-6h1v4h-1v-4zm-7 6h3c.55 0 1-.45 1-1V9c0-.55-.45-1-1-1H9c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1zm1-6h1v4h-1v-4zM5 8h2v8H5zM2 4v16h20V4H2zm18 14H4V6h16v12z');
        $doc->addChild($l0I2);
    }
}
