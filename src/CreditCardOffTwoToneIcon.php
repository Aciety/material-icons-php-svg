<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['action'],
    tags: ['card', 'charge', 'commerce', 'cost', 'credit', 'disabled', 'enabled', 'finance', 'money', 'off', 'online', 'pay', 'payment', 'slash'],
)]
final class CreditCardOffTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20,17.17V12h-5.17L20,17.17z M10.83,8H20V6H8.83L10.83,8z M4,6.83V8h1.17 L4,6.83z M15.17,18l-6-6H4v6H15.17z');
        $l0I1->setStyle('enable-background', 'new');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M6.83,4H20c1.11,0,2,0.89,2,2v12c0,0.34-0.08,0.66-0.23,0.94L20,17.17V12h-5.17l-4-4H20V6H8.83 L6.83,4z M20.49,23.31L17.17,20H4c-1.11,0-2-0.89-2-2L2.01,6c0-0.34,0.08-0.66,0.23-0.93L0.69,3.51L2.1,2.1l19.8,19.8L20.49,23.31z M4,6.83V8h1.17L4,6.83z M15.17,18l-6-6H4v6H15.17z');
        $l0I2->setStyle('enable-background', 'new');
        $doc->addChild($l0I2);
    }
}
