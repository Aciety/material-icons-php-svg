<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['image'],
    tags: ['edit', 'editing', 'effect', 'emoji', 'emotion', 'face', 'faces', 'image', 'natural', 'photo', 'photography', 'retouch', 'retouching', 'settings', 'star', 'tag'],
)]
final class FaceRetouchingNaturalOutlinedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M19.89,10.75C19.96,11.16,20,11.57,20,12c0,4.41-3.59,8-8,8s-8-3.59-8-8c0-0.05,0.01-0.1,0-0.14 c2.6-0.98,4.69-2.99,5.74-5.55c3.38,4.14,7.97,3.73,8.99,3.61l-0.89-1.93c-0.13,0.01-4.62,0.38-7.18-3.86 c1.01-0.16,1.71-0.15,2.59-0.01c2.52-1.15,1.93-0.89,2.76-1.26C14.78,2.3,13.43,2,12,2C6.48,2,2,6.48,2,12s4.48,10,10,10 s10-4.48,10-10c0-1.43-0.3-2.78-0.84-4.01L19.89,10.75z M8.08,5.03C7.45,6.92,6.13,8.5,4.42,9.47C5.05,7.58,6.37,6,8.08,5.03z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '15', cy: '13', r: '1.25');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGCircle(cx: '9', cy: '13', r: '1.25');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPolygon(points: [[23, 4.5], [20.6, 3.4], [19.5, 1], [18.4, 3.4], [16, 4.5], [18.4, 5.6], [19.5, 8], [20.6, 5.6]]);
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
