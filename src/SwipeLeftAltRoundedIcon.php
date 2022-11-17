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
    tags: ['alt', 'arrow', 'arrows', 'finger', 'hand', 'hit', 'left', 'navigation', 'reject', 'strike', 'swing', 'swipe', 'take'],
)]
final class SwipeLeftAltRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M10.1,13c0.46,2.28,2.48,4,4.9,4c2.76,0,5-2.24,5-5s-2.24-5-5-5c-2.42,0-4.44,1.72-4.9,4H5.83l0.88-0.88 c0.39-0.39,0.39-1.02,0-1.41c-0.39-0.39-1.02-0.39-1.41,0l-2.59,2.59c-0.39,0.39-0.39,1.02,0,1.41l2.59,2.59 c0.39,0.39,1.02,0.39,1.41,0c0.39-0.39,0.39-1.02,0-1.41L5.83,13H10.1z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
