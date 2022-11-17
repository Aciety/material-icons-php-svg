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
final class HomeTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z');
        $l0I2->setStyle('opacity', '.3');
        $doc->addChild($l0I2);
    }
}
