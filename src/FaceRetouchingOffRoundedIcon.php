<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['image'],
    tags: ['disabled', 'edit', 'editing', 'effect', 'emoji', 'emotion', 'enabled', 'face', 'faces', 'image', 'natural', 'off', 'on', 'photo', 'photography', 'retouch', 'retouching', 'settings', 'slash', 'tag'],
)]
final class FaceRetouchingOffRoundedIcon extends SvgIcon
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
        $l2I0 = new SVGCircle(cx: '9', cy: '13', r: '1.25');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M17.5,10c0.75,0,1.47-0.09,2.17-0.24C19.88,10.47,20,11.22,20,12c0,1.22-0.28,2.37-0.77,3.4l1.49,1.49 C21.53,15.44,22,13.78,22,12c0-5.52-4.48-10-10-10c-1.78,0-3.44,0.47-4.89,1.28l5.33,5.33C13.93,9.49,15.65,10,17.5,10z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M2.6,4.43l1.48,1.48C2.51,7.95,1.7,10.6,2.1,13.46c0.62,4.33,4.11,7.82,8.44,8.44c2.85,0.41,5.51-0.41,7.55-1.98 l1.48,1.48c0.39,0.39,1.02,0.39,1.41,0l0,0c0.39-0.39,0.39-1.02,0-1.41L4.01,3.01c-0.39-0.39-1.02-0.39-1.41,0l0,0 C2.21,3.41,2.21,4.04,2.6,4.43z M16.66,18.49C15.35,19.44,13.74,20,12,20c-4.41,0-8-3.59-8-8c0-0.05,0.01-0.1,0-0.14 c1.39-0.52,2.63-1.35,3.64-2.39L16.66,18.49z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
