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
    tags: ['alt', 'arrows', 'direction', 'disable', 'down', 'enable', 'finger', 'hands', 'hit', 'navigation', 'strike', 'swing', 'swpie', 'take'],
)]
final class SwipeDownAltRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M13,13.9c2.28-0.46,4-2.48,4-4.9c0-2.76-2.24-5-5-5S7,6.24,7,9c0,2.42,1.72,4.44,4,4.9v4.27l-0.88-0.88 c-0.39-0.39-1.02-0.39-1.41,0c-0.39,0.39-0.39,1.02,0,1.41l2.59,2.59c0.39,0.39,1.02,0.39,1.41,0l2.59-2.59 c0.39-0.39,0.39-1.02,0-1.41c-0.39-0.39-1.02-0.39-1.41,0L13,18.17V13.9z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
