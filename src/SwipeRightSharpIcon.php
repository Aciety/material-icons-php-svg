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
final class SwipeRightSharpIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M20.18,15.4L19.1,23h-9L5,17.62l1.22-1.23L10,17.24V6.5C10,5.67,10.67,5,11.5,5S13,5.67,13,6.5v6h1.38L20.18,15.4z M19.91,5.5H17V7h5V2h-1.5v2.02C18.18,2.13,15.22,1,12,1C6.51,1,2.73,4.12,2,7h1.57C4.33,5.02,7.26,2.5,12,2.5 C15.03,2.5,17.79,3.64,19.91,5.5z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
