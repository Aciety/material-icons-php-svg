<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['account', 'emoji', 'eyes', 'face', 'human', 'lock', 'log', 'login', 'logout', 'people', 'person', 'profile', 'recognition', 'security', 'social', 'thumbnail', 'unlock', 'user'],
)]
final class Face5TwoToneIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10s10-4.48,10-10S17.52,2,12,2z M12,20c-4.41,0-8-3.59-8-8 c0-1.12,0.23-2.18,0.65-3.15C4.74,8.94,4.86,9,5,9c0.28,0,0.5-0.22,0.5-0.5c0-0.25-0.19-0.45-0.43-0.49 c0.15-0.26,0.32-0.51,0.49-0.75C5.53,7.34,5.5,7.41,5.5,7.5C5.5,7.78,5.72,8,6,8s0.5-0.22,0.5-0.5C6.5,7.22,6.28,7,6,7 C5.87,7,5.75,7.05,5.66,7.13c0.52-0.68,1.15-1.28,1.86-1.76C7.51,5.41,7.5,5.45,7.5,5.5C7.5,5.78,7.72,6,8,6s0.5-0.22,0.5-0.5 c0-0.24-0.17-0.43-0.4-0.48c0.16-0.09,0.32-0.17,0.49-0.25C8.68,4.91,8.83,5,9,5c0.28,0,0.5-0.22,0.5-0.5 c0-0.03-0.01-0.06-0.02-0.09c0.39-0.13,0.79-0.23,1.21-0.3C10.58,4.21,10.5,4.34,10.5,4.5C10.5,4.78,10.72,5,11,5 s0.5-0.22,0.5-0.5c0-0.21-0.13-0.38-0.3-0.46C11.46,4.01,11.73,4,12,4s0.54,0.01,0.8,0.04c-0.18,0.08-0.3,0.25-0.3,0.46 C12.5,4.78,12.72,5,13,5s0.5-0.22,0.5-0.5c0-0.16-0.08-0.29-0.19-0.38c0.41,0.07,0.82,0.17,1.21,0.3 C14.51,4.44,14.5,4.47,14.5,4.5C14.5,4.78,14.72,5,15,5c0.17,0,0.32-0.09,0.41-0.23c0.17,0.08,0.33,0.16,0.49,0.25 c-0.23,0.05-0.4,0.24-0.4,0.48C15.5,5.78,15.72,6,16,6s0.5-0.22,0.5-0.5c0-0.05-0.01-0.09-0.03-0.13 c0.71,0.48,1.34,1.08,1.86,1.76C18.25,7.05,18.13,7,18,7c-0.28,0-0.5,0.22-0.5,0.5C17.5,7.78,17.72,8,18,8s0.5-0.22,0.5-0.5 c0-0.09-0.03-0.16-0.07-0.23c0.18,0.24,0.34,0.49,0.49,0.75C18.69,8.05,18.5,8.25,18.5,8.5C18.5,8.78,18.72,9,19,9 c0.14,0,0.26-0.06,0.35-0.15C19.77,9.82,20,10.88,20,12C20,16.41,16.41,20,12,20z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '9', cy: '13', r: '1.25');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGCircle(cx: '12', cy: '5.5', r: '.5');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGCircle(cx: '14', cy: '5.5', r: '.5');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGCircle(cx: '10', cy: '5.5', r: '.5');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGCircle(cx: '17', cy: '6.5', r: '.5');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGCircle(cx: '9', cy: '6.5', r: '.5');
        $l1I0->addChild($l2I6);
        $l2I7 = new SVGCircle(cx: '7', cy: '6.5', r: '.5');
        $l1I0->addChild($l2I7);
        $l2I8 = new SVGCircle(cx: '11', cy: '6.5', r: '.5');
        $l1I0->addChild($l2I8);
        $l2I9 = new SVGCircle(cx: '13', cy: '6.5', r: '.5');
        $l1I0->addChild($l2I9);
        $l2I10 = new SVGCircle(cx: '15', cy: '6.5', r: '.5');
        $l1I0->addChild($l2I10);
        $l2I11 = new SVGCircle(cx: '12', cy: '7.5', r: '.5');
        $l1I0->addChild($l2I11);
        $l2I12 = new SVGCircle(cx: '14', cy: '7.5', r: '.5');
        $l1I0->addChild($l2I12);
        $l2I13 = new SVGCircle(cx: '16', cy: '7.5', r: '.5');
        $l1I0->addChild($l2I13);
        $l2I14 = new SVGCircle(cx: '10', cy: '7.5', r: '.5');
        $l1I0->addChild($l2I14);
        $l2I15 = new SVGCircle(cx: '8', cy: '7.5', r: '.5');
        $l1I0->addChild($l2I15);
        $l2I16 = new SVGCircle(cx: '9', cy: '8.5', r: '.5');
        $l1I0->addChild($l2I16);
        $l2I17 = new SVGCircle(cx: '7', cy: '8.5', r: '.5');
        $l1I0->addChild($l2I17);
        $l2I18 = new SVGCircle(cx: '11', cy: '8.5', r: '.5');
        $l1I0->addChild($l2I18);
        $l2I19 = new SVGCircle(cx: '13', cy: '8.5', r: '.5');
        $l1I0->addChild($l2I19);
        $l2I20 = new SVGCircle(cx: '15', cy: '8.5', r: '.5');
        $l1I0->addChild($l2I20);
        $l2I21 = new SVGCircle(cx: '17', cy: '8.5', r: '.5');
        $l1I0->addChild($l2I21);
        $l2I22 = new SVGCircle(cx: '15', cy: '13', r: '1.25');
        $l1I0->addChild($l2I22);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
