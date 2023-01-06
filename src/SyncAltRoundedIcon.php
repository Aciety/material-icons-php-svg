<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['alt', 'arrow', 'arrows', 'horizontal', 'internet', 'sync', 'technology', 'up', 'update', 'wifi'],
)]
final class SyncAltRoundedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M21.65,7.65l-2.79-2.79C18.54,4.54,18,4.76,18,5.21V7H4C3.45,7,3,7.45,3,8s0.45,1,1,1h14v1.79c0,0.45,0.54,0.67,0.85,0.35 l2.79-2.79C21.84,8.16,21.84,7.84,21.65,7.65z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M20,15H6v-1.79c0-0.45-0.54-0.67-0.85-0.35l-2.79,2.79c-0.2,0.19-0.2,0.51-0.01,0.7l2.79,2.79C5.46,19.46,6,19.24,6,18.79 V17h14c0.55,0,1-0.45,1-1S20.55,15,20,15z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
