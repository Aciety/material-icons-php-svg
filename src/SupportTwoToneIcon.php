<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['assist', 'buoy', 'help', 'life', 'lifebuoy', 'rescue', 'safe', 'safety', 'support'],
)]
final class SupportTwoToneIcon extends SVG
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M10.3,7.32L9.13,4.54C7.02,5.35,5.35,7.02,4.54,9.13l2.78,1.15C7.83,8.9,8.92,7.82,10.3,7.32z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M7.32,13.72l-2.78,1.15c0.81,2.1,2.48,3.78,4.59,4.59l1.17-2.78C8.91,16.18,7.83,15.09,7.32,13.72z');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M16.67,10.27l2.78-1.15c-0.81-2.1-2.48-3.77-4.58-4.58l-1.15,2.78C15.09,7.83,16.17,8.9,16.67,10.27z');
        $l2I2->setStyle('opacity', '.3');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M16.68,13.71c-0.5,1.37-1.58,2.46-2.95,2.97l1.15,2.78c2.1-0.81,3.77-2.48,4.58-4.58L16.68,13.71z');
        $l2I3->setStyle('opacity', '.3');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M12,2C6.48,2,2,6.48,2,12c0,5.52,4.48,10,10,10s10-4.48,10-10C22,6.48,17.52,2,12,2z M14.87,4.54 c2.1,0.81,3.77,2.48,4.58,4.58l-2.78,1.15c-0.51-1.36-1.58-2.44-2.95-2.94L14.87,4.54z M9.13,4.54l1.17,2.78 c-1.38,0.5-2.47,1.59-2.98,2.97L4.54,9.13C5.35,7.02,7.02,5.35,9.13,4.54z M9.13,19.46c-2.1-0.81-3.78-2.48-4.59-4.59l2.78-1.15 c0.51,1.38,1.59,2.46,2.97,2.96L9.13,19.46z M9,12c0-1.66,1.34-3,3-3s3,1.34,3,3s-1.34,3-3,3S9,13.66,9,12z M14.88,19.46 l-1.15-2.78c1.37-0.51,2.45-1.59,2.95-2.97l2.78,1.17C18.65,16.98,16.98,18.65,14.88,19.46z');
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
