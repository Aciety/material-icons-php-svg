<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['social'],
    tags: ['account', 'emoji', 'eyes', 'face', 'human', 'lock', 'log', 'login', 'logout', 'people', 'person', 'profile', 'recognition', 'security', 'social', 'thumbnail', 'unlock', 'user'],
)]
final class Face3TwoToneIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M16.5,8c0.73,0,1.41-0.25,1.99-0.65C17.22,5.58,15.26,4.35,13,4.07V4.5C13,6.43,14.57,8,16.5,8z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M11,4.5V4.07C8.74,4.35,6.78,5.58,5.51,7.35C6.09,7.75,6.77,8,7.5,8C9.43,8,11,6.43,11,4.5z');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M2.75,15.8L2.19,22H12C7.82,22,4.25,19.44,2.75,15.8z');
        $l2I2->setStyle('opacity', '.3');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M12,22h9.81l-0.56-6.2C19.75,19.44,16.18,22,12,22z');
        $l2I3->setStyle('opacity', '.3');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGCircle(cx: '9', cy: '13', r: '1.25');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGCircle(cx: '15', cy: '13', r: '1.25');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGPath(d: 'M22.91,11.96C22.39,6.32,17.66,2,12,2S1.61,6.32,1.09,11.96l-0.9,9.86C0.09,22.99,1.01,24,2.19,24h19.62 c1.18,0,2.1-1.01,1.99-2.18L22.91,11.96z M13,4.07c2.26,0.28,4.22,1.51,5.49,3.28C17.91,7.75,17.23,8,16.5,8 C14.57,8,13,6.43,13,4.5V4.07z M11,4.07V4.5C11,6.43,9.43,8,7.5,8C6.77,8,6.09,7.75,5.51,7.35C6.78,5.58,8.74,4.35,11,4.07z M4.54,9.13C5.41,9.68,6.43,10,7.5,10C9.36,10,11,9.07,12,7.65C13,9.07,14.64,10,16.5,10c1.07,0,2.09-0.32,2.96-0.87 C19.8,10.02,20,10.99,20,12c0,4.41-3.59,8-8,8s-8-3.59-8-8C4,10.99,4.2,10.02,4.54,9.13z M12,22H2.19l0.56-6.2 C4.25,19.44,7.82,22,12,22s7.75-2.56,9.25-6.2l0.56,6.2H12z');
        $l1I0->addChild($l2I6);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
