<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['airplane', 'airplanemode', 'airport', 'disabled', 'enabled', 'flight', 'fly', 'inactive', 'maps', 'mode', 'off', 'offline', 'on', 'slash', 'transportation', 'travel'],
)]
final class AirplanemodeInactiveRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M22,14.6c0,0.7-0.67,1.2-1.34,1.01l-3.15-0.93L10.5,7.67V3.5C10.5,2.67,11.17,2,12,2c0.83,0,1.5,0.67,1.5,1.5V9l7.98,4.7 C21.8,13.88,22,14.23,22,14.6z M13.5,13.5L9.56,9.56L3.51,3.51c-0.39-0.39-1.02-0.39-1.41,0l0,0c-0.39,0.39-0.39,1.02,0,1.41 l5.67,5.67L2.52,13.7C2.2,13.88,2,14.23,2,14.6c0,0.7,0.67,1.2,1.34,1.01l7.16-2.1V19l-2.26,1.35C8.09,20.44,8,20.61,8,20.78l0,0.5 h0v0.08c0,0.33,0.31,0.57,0.62,0.49l2.92-0.73L12,21l0.38,0.09c0,0,0,0,0,0l0.42,0.11l1.9,0.48l0,0l0.67,0.17 c0.32,0.08,0.62-0.16,0.62-0.49v-0.37c0,0,0,0,0,0v-0.21c0-0.18-0.09-0.34-0.24-0.43L13.5,19v-2.67l5.57,5.57h0l0,0 c0.39,0.39,1.02,0.39,1.41,0s0.39-1.02,0-1.41L13.5,13.5z');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
