<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['av'],
    tags: ['arrow', 'arrows', 'control', 'controls', 'media', 'music', 'on', 'repeat', 'video'],
)]
final class RepeatOnRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M21,1H3C1.9,1,1,1.9,1,3v18c0,1.1,0.9,2,2,2h18c1.1,0,2-0.9,2-2V3C23,1.9,22.1,1,21,1z M19,18c0,0.55-0.45,1-1,1H7v1.79 c0,0.45-0.54,0.67-0.85,0.36l-2.79-2.79c-0.2-0.2-0.2-0.51,0-0.71l2.79-2.79C6.46,14.54,7,14.76,7,15.21V17h10v-3 c0-0.55,0.45-1,1-1s1,0.45,1,1V18z M20.64,6.35l-2.79,2.79C17.54,9.46,17,9.24,17,8.79V7H7v3c0,0.55-0.45,1-1,1s-1-0.45-1-1V6 c0-0.55,0.45-1,1-1h11V3.21c0-0.45,0.54-0.67,0.85-0.36l2.79,2.79C20.84,5.84,20.84,6.15,20.64,6.35z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
