<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['christian', 'christianity', 'religion', 'spiritual', 'worship'],
)]
final class ChurchRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M18,12.22v-1.99c0-0.76-0.43-1.45-1.11-1.79L13,6.5V5h1c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1h-1V2c0-0.55-0.45-1-1-1h0 c-0.55,0-1,0.45-1,1v1h-1C9.45,3,9,3.45,9,4v0c0,0.55,0.45,1,1,1h1v1.5L7.11,8.45C6.43,8.79,6,9.48,6,10.24v1.99l-2.81,1.25 C2.47,13.79,2,14.51,2,15.3V20c0,1.1,0.9,2,2,2h6l0-2.89c0-1,0.68-1.92,1.66-2.08C12.92,16.82,14,17.79,14,19v3h6c1.1,0,2-0.9,2-2 v-4.7c0-0.79-0.47-1.51-1.19-1.83L18,12.22z M12,13.5c-0.83,0-1.5-0.67-1.5-1.5s0.67-1.5,1.5-1.5s1.5,0.67,1.5,1.5 S12.83,13.5,12,13.5z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
