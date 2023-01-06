<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['places'],
    tags: ['architecture', 'beach', 'cottage', 'estate', 'home', 'house', 'lake', 'lodge', 'maps', 'place', 'real', 'residence', 'residential', 'stay', 'traveling'],
)]
final class CottageSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12,3L6,7.58V6H4v3.11L1,11.4l1.21,1.59L4,11.62V21h7v-6h2v6h7v-9.38l1.79,1.36L23,11.4L12,3z M10,1c0,1.66-1.34,3-3,3 C6.45,4,6,4.45,6,5H4c0-1.66,1.34-3,3-3c0.55,0,1-0.45,1-1H10z');
        $doc->addChild($l0I1);
    }
}
