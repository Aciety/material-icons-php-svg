<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['places'],
    tags: ['accessory', 'backpack', 'bag', 'bookbag', 'knapsack', 'no', 'pack', 'travel'],
)]
final class NoBackpackRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: '0', width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M6.98,4.15c0.01,0,0.01-0.01,0.02-0.01V3.5C7,2.67,7.67,2,8.5,2S10,2.67,10,3.5V4h4V3.5C14,2.67,14.67,2,15.5,2 S17,2.67,17,3.5v0.64c1.72,0.45,3,2,3,3.86v9.17l-2.03-2.03C17.98,15.09,18,15.05,18,15v-2c0-0.55-0.45-1-1-1h-2.17L6.98,4.15z M20.49,21.9c-0.39,0.39-1.02,0.39-1.41,0l-0.14-0.14C18.65,21.91,18.34,22,18,22H6c-1.1,0-2-0.9-2-2V8 c0-0.36,0.06-0.69,0.15-1.02L2.1,4.93c-0.39-0.39-0.39-1.02,0-1.41c0.39-0.39,1.02-0.39,1.41,0l16.97,16.97 C20.88,20.88,20.88,21.51,20.49,21.9z M11.17,14l-2-2H7c-0.55,0-1,0.45-1,1c0,0.55,0.45,1,1,1H11.17z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
