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
    tags: ['[offline]', 'alphabet', 'character', 'develop', 'developer', 'disabled', 'enabled', 'engineer', 'engineering', 'font', 'hls', 'letter', 'off', 'on', 'platform', 'slash', 'symbol', 'text', 'type'],
)]
final class HlsOffTwoToneIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M17.83,15h1.67c0.55,0,1-0.45,1-1v-1.5c0-0.55-0.45-1-1-1H17v-1h2V11h1.5v-1c0-0.55-0.45-1-1-1h-3c-0.55,0-1,0.45-1,1v1.5 c0,0.55,0.45,1,1,1H19v1h-2V13h-1.17L17.83,15z M8,10.83V15H6.5v-2.5h-2V15H3V9h1.5v2h2V9.33L1.39,4.22l1.41-1.41l18.38,18.38 l-1.41,1.41L12.17,15H10v-2.17L8,10.83z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
