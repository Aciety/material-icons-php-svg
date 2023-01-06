<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['--', '24', 'bill', 'building', 'business', 'card', 'cash', 'coin', 'commerce', 'company', 'convenience', 'credit', 'currency', 'dollars', 'local', 'maps', 'market', 'money', 'new', 'online', 'pay', 'payment', 'plus', 'shop', 'shopping', 'store', 'storefront', 'symbol'],
)]
final class LocalConvenienceStoreIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M19 7V4H5v3H2v13h8v-4h4v4h8V7h-3zm-8 3H9v1h2v1H8V9h2V8H8V7h3v3zm5 2h-1v-2h-2V7h1v2h1V7h1v5z');
        $doc->addChild($l0I1);
    }
}
