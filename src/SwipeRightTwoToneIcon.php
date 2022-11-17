<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['accept', 'arrows', 'direction', 'finger', 'hands', 'hit', 'navigation', 'right', 'strike', 'swing', 'swpie', 'take'],
)]
final class SwipeRightTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M17.08,21h-6.55l-3.7-3.78L11,18.11V7.5C11,7.22,11.22,7,11.5,7S12,7.22,12,7.5v6.18h1.76L18,15.56L17.08,21 z');
        $l1I0->setStyle('opacity', '.3');
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M18.89,13.77l-3.8-1.67C14.96,12.04,14.81,12,14.65,12H14V7.5C14,6.12,12.88,5,11.5,5S9,6.12,9,7.5v8.15l-1.87-0.4 c-0.19-0.03-1.02-0.15-1.73,0.56L4,17.22l5.12,5.19C9.49,22.79,10,23,10.53,23h6.55c0.98,0,1.81-0.7,1.97-1.67l0.92-5.44 C20.12,15.03,19.68,14.17,18.89,13.77z M17.08,21h-6.55l-3.7-3.78L11,18.11V7.5C11,7.22,11.22,7,11.5,7S12,7.22,12,7.5v6.18h1.76 L18,15.56L17.08,21z M12,2.5C7.26,2.5,4.33,5.02,3.57,7H2c0.73-2.88,4.51-6,10-6c3.22,0,6.18,1.13,8.5,3.02V2H22v5h-5V5.5h2.91 C17.79,3.64,15.03,2.5,12,2.5z');
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
