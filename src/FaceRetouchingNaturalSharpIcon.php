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
    tags: ['edit', 'editing', 'effect', 'emoji', 'emotion', 'face', 'faces', 'image', 'natural', 'photo', 'photography', 'retouch', 'retouching', 'settings', 'star', 'tag'],
)]
final class FaceRetouchingNaturalSharpIcon extends SvgIcon
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
        $l2I1 = new SVGPath(d: 'M19.85,10.59C20.79,15.4,17.01,20,12,20c-4.41,0-8-3.59-8-8c0-0.39,3.87-1.12,5.74-5.69c3.42,4.19,8.07,3.73,9.09,3.59 l-1.48-3.25L12.63,4.5l3.5-1.59C9.51-0.14,2,4.77,2,12c0,5.52,4.48,10,10,10c7.21,0,12.12-7.45,9.1-14.13L19.85,10.59z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGCircle(cx: '15', cy: '13', r: '1.25');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M20.6,5.6L19.5,8l-1.1-2.4L16,4.5l2.4-1.1L19.5,1l1.1,2.4L23,4.5L20.6,5.6z');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
