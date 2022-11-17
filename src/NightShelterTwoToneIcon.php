<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['places'],
    tags: ['architecture', 'bed', 'building', 'estate', 'homeless', 'house', 'night', 'place', 'real', 'shelter', 'sleep'],
)]
final class NightShelterTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12,5.5l6,4.5v9H6v-9L12,5.5 M15,12h-3.5v3.5H8V11H7v7h1v-1.5h8V18h1v-4C17,12.9,16.1,12,15,12z M9.75,12.5 c-0.69,0-1.25,0.56-1.25,1.25C8.5,14.44,9.06,15,9.75,15S11,14.44,11,13.75C11,13.06,10.44,12.5,9.75,12.5z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M12,5.5l6,4.5v9H6v-9L12,5.5 M12,3L4,9v12h16V9L12,3L12,3z M15,12h-3.5v3.5H8V11H7v7h1v-1.5h8V18h1v-4 C17,12.9,16.1,12,15,12z M9.75,12.5c-0.69,0-1.25,0.56-1.25,1.25C8.5,14.44,9.06,15,9.75,15S11,14.44,11,13.75 C11,13.06,10.44,12.5,9.75,12.5z');
        $doc->addChild($l0I2);
    }
}
