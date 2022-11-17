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
    categories: ['maps'],
    tags: ['jew', 'jewish', 'religion', 'shul', 'spiritual', 'temple', 'worship'],
)]
final class SynagogueOutlinedIcon extends SVG
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M20,4c-1.66,0-3,1.34-3,3v0.29L12,3L7,7.29V7c0-1.66-1.34-3-3-3S1,5.34,1,7v14h10v-5c0-0.55,0.45-1,1-1s1,0.45,1,1v5h10V7 C23,5.34,21.66,4,20,4z M20,6c0.55,0,1,0.45,1,1v1h-2V7C19,6.45,19.45,6,20,6z M4,6c0.55,0,1,0.45,1,1v1H3V7C3,6.45,3.45,6,4,6z M3,19v-9h2v9H3z M17,19h-2v-3c0-1.65-1.35-3-3-3c-1.65,0-3,1.35-3,3v3H7V9.92l5-4.29l5,4.29V19z M19,19v-9h2v9H19z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '12', cy: '10', r: '1.5');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
