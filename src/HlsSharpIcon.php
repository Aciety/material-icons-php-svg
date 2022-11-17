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
    tags: ['alphabet', 'character', 'develop', 'developer', 'engineer', 'engineering', 'font', 'hls', 'letter', 'platform', 'symbol', 'text', 'type'],
)]
final class HlsSharpIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M6.5,9H8v6H6.5v-2.5h-2V15H3V9h1.5v2h2V9z M15.5,15h5v-3.5H17v-1h2V11h1.5V9h-5v3.5H19v1h-2V13h-1.5V15z M14,15v-1.5h-2.5 V9H10v6H14z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
