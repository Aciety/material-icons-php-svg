<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['action'],
    tags: ['!', 'alert', 'attention', 'bill', 'card', 'cart', 'cash', 'caution', 'coin', 'commerce', 'credit', 'currency', 'danger', 'dollars', 'error', 'exclamation', 'important', 'limits', 'mark', 'money', 'notification', 'online', 'pay', 'payment', 'production', 'quantity', 'shopping', 'symbol', 'warning'],
)]
final class ProductionQuantityLimitsSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M13,10h-2V8h2V10z M13,6h-2V1h2V6z M7,18c-1.1,0-1.99,0.9-1.99,2S5.9,22,7,22s2-0.9,2-2S8.1,18,7,18z M17,18 c-1.1,0-1.99,0.9-1.99,2s0.89,2,1.99,2s2-0.9,2-2S18.1,18,17,18z M8.1,13h7.45c0.75,0,1.41-0.41,1.75-1.03L21,4.96L19.25,4l-3.7,7 H8.53L4.27,2H1v2h2l3.6,7.59l-1.35,2.44C4.52,15.37,5.48,17,7,17h12v-2H7L8.1,13z');
        $doc->addChild($l0I1);
    }
}
