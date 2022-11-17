<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['A', 'auto', 'celsius', 'fahrenheit', 'meter', 'temp', 'temperature', 'thermometer', 'thermostat'],
)]
final class ThermostatAutoRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M11,12V6c0-1.66-1.34-3-3-3S5,4.34,5,6v6c-1.21,0.91-2,2.37-2,4c0,1.12,0.38,2.14,1,2.97V19h0.02c0.91,1.21,2.35,2,3.98,2 s3.06-0.79,3.98-2H12v-0.03c0.62-0.83,1-1.85,1-2.97C13,14.37,12.21,12.91,11,12z M5,16c0-0.94,0.45-1.84,1.2-2.4L7,13V6 c0-0.55,0.45-1,1-1s1,0.45,1,1v7l0.8,0.6c0.75,0.57,1.2,1.46,1.2,2.4H5z M17.81,4L17.81,4c-0.48,0-0.92,0.3-1.09,0.75L14,12.02 C13.82,12.49,14.17,13,14.67,13h0c0.31,0,0.58-0.19,0.68-0.48L16,10.7h3.63l0.64,1.82c0.1,0.29,0.38,0.48,0.68,0.48l0,0 c0.51,0,0.86-0.51,0.68-0.98L18.9,4.75C18.73,4.3,18.3,4,17.81,4z M16.47,9.39l1.31-3.72h0.08l1.31,3.72H16.47z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
