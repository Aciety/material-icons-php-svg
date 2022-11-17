<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['address', 'app', 'application--house', 'architecture', 'building', 'components', 'design', 'estate', 'home', 'interface', 'layout', 'place', 'real', 'residence', 'residential', 'screen', 'shelter', 'site', 'structure', 'ui', 'unit', 'ux', 'web', 'website', 'window'],
)]
final class HomeSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8h5z');
        $doc->addChild($l0I1);
    }
}
