<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['accessibility', 'accessible', 'assist', 'blind', 'body', 'cane', 'disability', 'handicap', 'help', 'human', 'mobility', 'person', 'walk', 'walker'],
)]
final class BlindRoundedIcon extends SVG
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
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGCircle(cx: '11.41', cy: '3.5', r: '2');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M12.04,7.12c-0.17-0.35-0.44-0.65-0.8-0.85C10.63,5.91,9.9,5.93,9.31,6.24l0-0.01L4.92,8.73 C4.3,9.08,3.91,9.74,3.91,10.46V13c0,0.55,0.45,1,1,1h0c0.55,0,1-0.45,1-1v-2.54l1.5-0.85c-0.32,1.1-0.5,2.24-0.5,3.39v5.33 l-2,2.67c-0.33,0.44-0.24,1.07,0.2,1.4l0,0c0.44,0.33,1.07,0.24,1.4-0.2l2.04-2.72c0.23-0.31,0.37-0.69,0.4-1.08l0.18-2.94 L10.91,18v4c0,0.55,0.45,1,1,1h0c0.55,0,1-0.45,1-1v-4.87c0-0.41-0.13-0.81-0.36-1.15l-1.6-2.29c0,0,0,0,0-0.01 c-0.11-1.16,0.07-2.32,0.46-3.4c0.75,1.14,1.88,1.98,3.2,2.41l5.7,9.87c0.14,0.24,0.44,0.32,0.68,0.18l0,0 c0.24-0.14,0.32-0.44,0.18-0.68L15.92,13h0c0.54,0,0.98-0.44,0.98-0.98v-0.05c0-0.5-0.37-0.94-0.87-0.99 c-0.95-0.1-2.37-0.52-3.21-2.18');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
