<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['navigation'],
    tags: ['arrows', 'directional', 'navigation', 'right', 'switch', 'toggle'],
)]
final class SwitchRightRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setAttribute('transform', 'matrix(-1 -1.224647e-16 1.224647e-16 -1 24 24)');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M15.5,15.38V8.62L18.88,12L15.5,15.38 M20.29,12.71c0.39-0.39,0.39-1.02,0-1.41l-4.59-4.59C15.08,6.08,14,6.52,14,7.41v9.17 c0,0.89,1.08,1.34,1.71,0.71L20.29,12.71z M10,16.59V7.41c0-0.89-1.08-1.34-1.71-0.71l-4.59,4.59c-0.39,0.39-0.39,1.02,0,1.41 l4.59,4.59C8.92,17.92,10,17.48,10,16.59z');
        $doc->addChild($l0I1);
    }
}
