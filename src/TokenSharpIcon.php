<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['badge', 'hexagon', 'mark', 'shield', 'sign', 'symbol'],
)]
final class TokenSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: '0', width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M19.97,6.43L12,2L4.03,6.43L9.1,9.24C9.83,8.48,10.86,8,12,8s2.17,0.48,2.9,1.24L19.97,6.43z M10,12c0-1.1,0.9-2,2-2 s2,0.9,2,2s-0.9,2-2,2S10,13.1,10,12z M11,21.44L3,17V8.14l5.13,2.85C8.04,11.31,8,11.65,8,12c0,1.86,1.27,3.43,3,3.87V21.44z M13,21.44v-5.57c1.73-0.44,3-2.01,3-3.87c0-0.35-0.04-0.69-0.13-1.01L21,8.14L21,17L13,21.44z');
        $doc->addChild($l0I1);
    }
}
