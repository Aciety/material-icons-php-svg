<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['places'],
    tags: ['allowed', 'e-cigarette', 'never', 'no', 'places', 'prohibited', 'smoke', 'smoking', 'tobacco', 'vape', 'vaping', 'vapor', 'warning', 'zone'],
)]
final class VapingRoomsRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M22,17.5c0,0.83-0.67,1.5-1.5,1.5H8v-3h12.5C21.33,16,22,16.67,22,17.5z M10.5,17c-0.28,0-0.5,0.22-0.5,0.5 s0.22,0.5,0.5,0.5s0.5-0.22,0.5-0.5S10.78,17,10.5,17z M18.85,7.73c0.62-0.61,1-1.45,1-2.38c0-1.51-1-2.79-2.38-3.21 C16.99,2,16.5,2.36,16.5,2.86c0,0.33,0.21,0.62,0.52,0.71c0.77,0.23,1.33,0.94,1.33,1.78c0,0.82-0.53,1.51-1.27,1.76 C16.75,7.22,16.5,7.5,16.5,7.85V8c0,0.37,0.27,0.69,0.64,0.75c1.93,0.31,3.36,2,3.36,4.02v1.48c0,0.41,0.34,0.75,0.75,0.75 S22,14.66,22,14.25v-1.49C22,10.54,20.72,8.62,18.85,7.73z M18.76,15c0.41,0,0.75-0.33,0.75-0.75v-0.89 c-0.01-1.81-1.61-3.16-3.48-3.16h-1.3c-1.02,0-1.94-0.73-2.07-1.75c-0.12-0.95,0.46-1.7,1.3-1.93c0.32-0.09,0.54-0.38,0.54-0.72 c0-0.49-0.46-0.86-0.93-0.72c-1.42,0.41-2.45,1.73-2.42,3.28c0.03,1.84,1.62,3.29,3.46,3.29h1.42c1.05,0,1.97,0.74,1.97,2.05v0.55 C18,14.66,18.34,15,18.76,15z M3,18.5c1.33,0,2.71,0.18,4,0.5v-3c-1.29,0.32-2.67,0.5-4,0.5c-0.55,0-1,0.45-1,1S2.45,18.5,3,18.5z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
