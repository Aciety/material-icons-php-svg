<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['arrow', 'arrows', 'fingers', 'gesture', 'hand', 'hands', 'swipe', 'touch'],
)]
final class SwipeRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M21.15,2.85l-1.02,1.02C18.69,2.17,15.6,1,12,1S5.31,2.17,3.87,3.87L2.85,2.85C2.54,2.54,2,2.76,2,3.21V6.5 C2,6.78,2.22,7,2.5,7h3.29c0.45,0,0.67-0.54,0.35-0.85L4.93,4.93c1-1.29,3.7-2.43,7.07-2.43s6.07,1.14,7.07,2.43l-1.22,1.22 C17.54,6.46,17.76,7,18.21,7h3.29C21.78,7,22,6.78,22,6.5V3.21C22,2.76,21.46,2.54,21.15,2.85z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M14.5,12.71c-0.28-0.14-0.58-0.21-0.89-0.21H13v-6C13,5.67,12.33,5,11.5,5S10,5.67,10,6.5v10.74l-3.44-0.72 c-0.37-0.08-0.76,0.04-1.03,0.31l0,0c-0.43,0.44-0.43,1.14,0.01,1.58l4.01,4.01C9.92,22.79,10.43,23,10.96,23h6.41 c1,0,1.84-0.73,1.98-1.72l0.63-4.46c0.12-0.85-0.32-1.69-1.09-2.07L14.5,12.71z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
