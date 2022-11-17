<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['navigation'],
    tags: ['arrow', 'directional', 'down', 'maps', 'navigation', 'south'],
)]
final class SouthRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M18.3,14.29L18.3,14.29c-0.39-0.39-1.02-0.39-1.41,0L13,18.17V3c0-0.55-0.45-1-1-1h0c-0.55,0-1,0.45-1,1v15.18l-3.88-3.88 c-0.39-0.39-1.02-0.39-1.41,0l0,0c-0.39,0.39-0.39,1.02,0,1.41l5.59,5.59c0.39,0.39,1.02,0.39,1.41,0l5.59-5.59 C18.68,15.32,18.68,14.68,18.3,14.29z');
        $doc->addChild($l0I1);
    }
}
