<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['audio', 'aware', 'cancel', 'cancellation', 'control', 'disabled', 'enabled', 'music', 'noise', 'note', 'off', 'offline', 'on', 'slash', 'sound'],
)]
final class NoiseControlOffTwoToneIcon extends SvgIcon
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M12,4c1.44,0,2.79,0.38,3.95,1.05l1.45-1.45C15.85,2.59,13.99,2,12,2S8.15,2.59,6.59,3.59l1.45,1.45 C9.21,4.38,10.56,4,12,4z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M20,12c0,1.44-0.38,2.79-1.05,3.95l1.45,1.45C21.41,15.85,22,13.99,22,12s-0.59-3.85-1.59-5.41l-1.45,1.45 C19.62,9.21,20,10.56,20,12z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M12,20c-1.44,0-2.79-0.38-3.95-1.05l-1.45,1.45C8.15,21.41,10.01,22,12,22s3.85-0.59,5.41-1.59l-1.45-1.45 C14.79,19.62,13.44,20,12,20z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M4,12c0-1.44,0.38-2.79,1.05-3.95L3.59,6.59C2.59,8.15,2,10.01,2,12s0.59,3.85,1.59,5.41l1.45-1.45 C4.38,14.79,4,13.44,4,12z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M11.5,6C9.02,6,7,8.02,7,10.5c0,1.22,0.49,2.41,1.35,3.27l1.36,1.36c0.17,0.17,0.31,0.44,0.44,0.82 C10.56,17.17,11.71,18,13,18c1.65,0,3-1.35,3-3h-2c0,0.55-0.45,1-1,1c-0.43,0-0.81-0.27-0.95-0.68c-0.15-0.44-0.4-1.08-0.93-1.61 l-1.36-1.36C9.28,11.87,9,11.19,9,10.5C9,9.12,10.12,8,11.5,8c1.21,0,2.22,0.86,2.45,2h2.02C15.72,7.75,13.81,6,11.5,6z');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGCircle(cx: '13.5', cy: '12.5', r: '1.5');
        $l1I0->addChild($l2I5);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
