<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['home'],
    tags: ['bolt', 'electric', 'energy', 'fast', 'lightning', 'measure', 'meter', 'nest', 'thunderbolt', 'usage', 'voltage', 'volts'],
)]
final class ElectricMeterRoundedIcon extends SVG
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
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M11.73,2C7.05,2.14,3.15,6.03,3,10.71c-0.13,4.04,2.42,7.5,6,8.77V21c0,0.55,0.45,1,1,1h0c0.55,0,1-0.45,1-1v-1.06 c0.33,0.04,0.66,0.06,1,0.06s0.67-0.02,1-0.06V21c0,0.55,0.45,1,1,1h0c0.55,0,1-0.45,1-1v-1.53c3.49-1.24,6-4.57,6-8.47 C21,5.95,16.82,1.85,11.73,2z M13.54,14.71L12,16.25c-0.41,0.41-1.09,0.41-1.5,0h0c-0.41-0.41-0.41-1.09,0-1.5l0.5-0.5l-0.54-0.54 c-0.39-0.39-0.39-1.02,0-1.41L12,10.75c0.41-0.41,1.09-0.41,1.5,0l0,0c0.41,0.41,0.41,1.09,0,1.5l-0.5,0.5l0.54,0.54 C13.93,13.68,13.93,14.32,13.54,14.71z M15,9H9C8.45,9,8,8.55,8,8v0c0-0.55,0.45-1,1-1h6c0.55,0,1,0.45,1,1v0C16,8.55,15.55,9,15,9 z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
