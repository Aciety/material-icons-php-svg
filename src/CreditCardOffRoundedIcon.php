<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['card', 'charge', 'commerce', 'cost', 'credit', 'disabled', 'enabled', 'finance', 'money', 'off', 'online', 'pay', 'payment', 'slash'],
)]
final class CreditCardOffRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M21.19,21.19L2.81,2.81c-0.39-0.39-1.02-0.39-1.41,0l0,0C1,3.2,1,3.83,1.39,4.22l0.84,0.84C2.09,5.34,2.01,5.66,2.01,6L2,18 c0,1.11,0.89,2,2,2h13.17l2.61,2.61c0.39,0.39,1.02,0.39,1.41,0v0C21.58,22.22,21.58,21.58,21.19,21.19z M4,12V8h1.17l4,4H4z M6.83,4H20c1.11,0,2,0.89,2,2v12c0,0.34-0.08,0.66-0.23,0.94L14.83,12H20V8h-9.17L6.83,4z');
        $doc->addChild($l0I1);
    }
}
