<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['places'],
    tags: ['architecture', 'building', 'chimney', 'construction', 'estate', 'home', 'house', 'real', 'residence', 'residential', 'roof', 'roofing', 'service', 'shelter'],
)]
final class RoofingRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M13,18h-2v-2h2V18z M9,15v4c0,0.55,0.45,1,1,1h4c0.55,0,1-0.45,1-1v-4c0-0.55-0.45-1-1-1h-4C9.45,14,9,14.45,9,15z M19,9.3 L19,9.3V5c0-0.55-0.45-1-1-1h-1c-0.55,0-1,0.45-1,1v1.6v0l-3.33-3c-0.38-0.34-0.96-0.34-1.34,0l-8.36,7.53 C2.63,11.43,2.84,12,3.3,12h1.31c0.25,0,0.49-0.09,0.67-0.26L12,5.69l6.71,6.05C18.9,11.91,19.14,12,19.38,12h1.31 c0.46,0,0.68-0.57,0.33-0.87L19,9.3z');
        $doc->addChild($l0I1);
    }
}
