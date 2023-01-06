<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['arrows', 'direction', 'disable', 'down', 'enable', 'finger', 'hands', 'hit', 'navigation', 'strike', 'swing', 'swpie', 'take'],
)]
final class SwipeDownTwoToneIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M21.49,17.34L15.5,20l-4.92-1.96l4.18-0.88l-4.3-9.7c-0.11-0.25,0-0.55,0.25-0.66 c0.25-0.11,0.55,0,0.66,0.25l2.5,5.65l1.61-0.71L20.13,12L21.49,17.34z');
        $l1I0->setStyle('opacity', '.3');
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M20.22,10l-4.15,0.01c-0.16-0.01-0.31,0.02-0.45,0.08l-0.59,0.26L13.2,6.25c-0.56-1.26-2.04-1.83-3.3-1.27 s-1.83,2.04-1.27,3.3l3.3,7.45l-1.87,0.39c-0.19,0.05-0.99,0.27-1.36,1.21L8,19.19l6.78,2.67c0.49,0.19,1.05,0.18,1.53-0.04 l5.99-2.65c0.89-0.4,1.37-1.38,1.13-2.32l-1.36-5.34C21.85,10.65,21.1,10.04,20.22,10z M21.49,17.34L15.5,20l-4.92-1.96l4.18-0.88 l-4.3-9.7c-0.11-0.25,0-0.55,0.25-0.66c0.25-0.11,0.55,0,0.66,0.25l2.5,5.65l1.61-0.71L20.13,12L21.49,17.34z M3.8,12.18 c-0.2-0.86-0.3-1.76-0.3-2.68c0-2.84,0.99-5.45,2.63-7.5L7.2,3.07C5.82,4.85,5,7.08,5,9.5c0,0.88,0.11,1.74,0.32,2.56l1.62-1.62 L8,11.5L4.5,15L1,11.5l1.06-1.06L3.8,12.18z');
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
