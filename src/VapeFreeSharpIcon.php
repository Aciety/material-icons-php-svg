<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['places'],
    tags: ['disabled', 'e-cigarette', 'enabled', 'free', 'never', 'no', 'off', 'on', 'places', 'prohibited', 'slash', 'smoke', 'smoking', 'tobacco', 'vape', 'vaping', 'vapor', 'warning', 'zone'],
)]
final class VapeFreeSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M2,16.5h1c1.33,0,2.71-0.18,4-0.5v3c-1.29-0.32-2.67-0.5-4-0.5H2V16.5z M16.17,19H8v-3h5.17L1.39,4.22l1.41-1.41 l18.38,18.38l-1.41,1.41L16.17,19z M18.83,16H22v3h-0.17L18.83,16z M11,17.5c0-0.28-0.22-0.5-0.5-0.5S10,17.22,10,17.5 c0,0.28,0.22,0.5,0.5,0.5S11,17.78,11,17.5z M22,12.76V15h-1.5v-2.23c0-2.24-1.76-4.07-4-4.07V7.2c1.02,0,1.85-0.83,1.85-1.85 S17.52,3.5,16.5,3.5V2c1.85,0,3.35,1.5,3.35,3.35c0,0.93-0.38,1.77-1,2.38C20.72,8.62,22,10.54,22,12.76z M11.15,8.32 c0-0.01,0-0.01,0-0.02c0-1.85,1.5-3.35,3.35-3.35v1.5c-1.02,0-1.85,0.73-1.85,1.75s0.83,2,1.85,2h1.53c1.87,0,3.47,1.35,3.47,3.16 V15H18v-1.3c0-1.31-0.92-2.05-1.97-2.05H14.5c-0.01,0-0.01,0-0.02,0L11.15,8.32z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
