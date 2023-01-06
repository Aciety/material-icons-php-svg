<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['jew', 'jewish', 'religion', 'shul', 'spiritual', 'temple', 'worship'],
)]
final class SynagogueTwoToneIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M4,6C3.45,6,3,6.45,3,7v1h2V7C5,6.45,4.55,6,4,6z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '3', y: '10', width: '2', height: '9');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M7,9.92V19h2v-3c0-1.65,1.35-3,3-3c1.65,0,3,1.35,3,3v3h2V9.92l-5-4.29L7,9.92z M13.5,10 c0,0.83-0.67,1.5-1.5,1.5s-1.5-0.67-1.5-1.5s0.67-1.5,1.5-1.5S13.5,9.17,13.5,10z');
        $l2I2->setStyle('opacity', '.3');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M20,6c-0.55,0-1,0.45-1,1v1h2V7C21,6.45,20.55,6,20,6z');
        $l2I3->setStyle('opacity', '.3');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGRect(x: '19', y: '10', width: '2', height: '9');
        $l2I4->setStyle('opacity', '.3');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M20,4c-1.66,0-3,1.34-3,3v0.29L12,3L7,7.29V7c0-1.66-1.34-3-3-3S1,5.34,1,7v14h10v-5c0-0.55,0.45-1,1-1s1,0.45,1,1v5h10V7 C23,5.34,21.66,4,20,4z M5,19H3v-9h2V19z M5,8H3V7c0-0.55,0.45-1,1-1s1,0.45,1,1V8z M17,19h-2v-3c0-1.65-1.35-3-3-3 c-1.65,0-3,1.35-3,3v3H7V9.92l5-4.29l5,4.29V19z M21,19h-2v-9h2V19z M21,8h-2V7c0-0.55,0.45-1,1-1s1,0.45,1,1V8z');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGCircle(cx: '12', cy: '10', r: '1.5');
        $l1I0->addChild($l2I6);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
