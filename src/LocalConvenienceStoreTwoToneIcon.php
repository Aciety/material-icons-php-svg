<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['--', '24', 'bill', 'building', 'business', 'card', 'cash', 'coin', 'commerce', 'company', 'convenience', 'credit', 'currency', 'dollars', 'local', 'maps', 'market', 'money', 'new', 'online', 'pay', 'payment', 'plus', 'shop', 'shopping', 'store', 'storefront', 'symbol'],
)]
final class LocalConvenienceStoreTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M14 14h2v4h4V9h-3V6H7v3H4v9h4v-4h6zm-1-7h1v2h1V7h1v5h-1v-2h-2V7zM8 9h2V8H8V7h3v3H9v1h2v1H8V9z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M10 16h4v4h8V7h-3V4H5v3H2v13h8v-4zm-2 0v2H4V9h3V6h10v3h3v9h-4v-4H8v2zm3-5H9v-1h2V7H8v1h2v1H8v3h3zm4 1h1V7h-1v2h-1V7h-1v3h2z');
        $doc->addChild($l0I2);
    }
}
