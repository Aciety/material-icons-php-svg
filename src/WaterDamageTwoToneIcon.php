<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['places'],
    tags: ['architecture', 'building', 'damage', 'drop', 'droplet', 'estate', 'house', 'leak', 'plumbing', 'real', 'residence', 'residential', 'shelter', 'water'],
)]
final class WaterDamageTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12,5.69l-5,4.5V18h10v-7.81L12,5.69z M12,16c-1.1,0-2-0.9-2-2c0-1.1,2-4,2-4s2,2.9,2,4 C14,15.1,13.1,16,12,16z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M12,3L2,12h3v8h14v-8h3L12,3z M7,18v-7.81l5-4.5l5,4.5V18H7z M14,14c0,1.1-0.9,2-2,2s-2-0.9-2-2c0-1.1,2-4,2-4 S14,12.9,14,14z');
        $doc->addChild($l0I2);
    }
}
