<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['image'],
    tags: ['alarm', 'alart', 'bell', 'clock', 'disabled', 'duration', 'enabled', 'notification', 'off', 'on', 'slash', 'stop', 'time', 'timer', 'watch'],
)]
final class TimerOffRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M10,3h4c0.55,0,1-0.45,1-1c0-0.55-0.45-1-1-1h-4C9.45,1,9,1.45,9,2C9,2.55,9.45,3,10,3z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M12,8c0.55,0,1,0.45,1,1v1.17l6.98,6.98C20.63,15.91,21,14.5,21,13c0-2.12-0.74-4.07-1.97-5.61l0.75-0.75 c0.38-0.38,0.39-1.01,0-1.4c0,0-0.01-0.01-0.01-0.01c-0.39-0.39-1.01-0.38-1.4,0l-0.75,0.75C16.07,4.74,14.12,4,12,4 c-1.48,0-2.89,0.38-4.13,1.04l3.36,3.36C11.41,8.16,11.68,8,12,8z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M2.1,3.51L2.1,3.51c-0.39,0.39-0.39,1.02,0,1.41l2.72,2.72C3.73,9.09,3.05,10.86,3,12.76C2.87,17.84,6.94,22,12,22 c2.02,0,3.88-0.67,5.38-1.79l1.69,1.69c0.39,0.39,1.02,0.39,1.41,0l0,0c0.39-0.39,0.39-1.02,0-1.41L3.51,3.51 C3.12,3.12,2.49,3.12,2.1,3.51z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
