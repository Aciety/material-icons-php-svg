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
final class MoneyIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M5 8h2v8H5zm7 0H9c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h3c.55 0 1-.45 1-1V9c0-.55-.45-1-1-1zm-1 6h-1v-4h1v4zm7-6h-3c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h3c.55 0 1-.45 1-1V9c0-.55-.45-1-1-1zm-1 6h-1v-4h1v4z');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M4 6h16v12H4z');
        $l0I2->setStyle('fill', 'none');
        $doc->addChild($l0I2);
        $l0I3 = new SVGPath(d: 'M2 4v16h20V4H2zm2 14V6h16v12H4z');
        $doc->addChild($l0I3);
    }
}
