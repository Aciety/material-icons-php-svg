<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['circle', 'currency', 'money', 'paid', 'payment', 'transaction'],
)]
final class PaidRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10s10-4.48,10-10S17.52,2,12,2z M12.88,17.76v0.36c0,0.48-0.39,0.88-0.88,0.88h0 c-0.48,0-0.88-0.39-0.88-0.88v-0.42c-0.63-0.15-1.93-0.61-2.69-2.1c-0.23-0.44-0.01-0.99,0.45-1.18l0.07-0.03 c0.41-0.17,0.87,0,1.08,0.39c0.32,0.61,0.95,1.37,2.12,1.37c0.93,0,1.98-0.48,1.98-1.61c0-0.96-0.7-1.46-2.28-2.03 c-1.1-0.39-3.35-1.03-3.35-3.31c0-0.1,0.01-2.4,2.62-2.96V5.88C11.12,5.39,11.52,5,12,5h0c0.48,0,0.88,0.39,0.88,0.88v0.37 c1.07,0.19,1.75,0.76,2.16,1.3c0.34,0.44,0.16,1.08-0.36,1.3l0,0C14.32,9,13.9,8.88,13.66,8.57c-0.28-0.38-0.78-0.77-1.6-0.77 c-0.7,0-1.81,0.37-1.81,1.39c0,0.95,0.86,1.31,2.64,1.9c2.4,0.83,3.01,2.05,3.01,3.45C15.9,17.17,13.4,17.67,12.88,17.76z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
