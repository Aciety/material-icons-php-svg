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
    tags: ['committee', 'diverse', 'diversity', 'family', 'friends', 'group', 'groups', 'heart', 'humans', 'network', 'people', 'persons', 'social', 'team'],
)]
final class Diversity1RoundedIcon extends SVG
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
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGCircle(cx: '4', cy: '14', r: '2');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M1.22,17.58C0.48,17.9,0,18.62,0,19.43L0,20c0,0.55,0.45,1,1,1l3.5,0v-1.61c0-0.83,0.23-1.61,0.63-2.29 C4.76,17.04,4.39,17,4,17C3.01,17,2.07,17.21,1.22,17.58z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGCircle(cx: '20', cy: '14', r: '2');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M22.78,17.58C21.93,17.21,20.99,17,20,17c-0.39,0-0.76,0.04-1.13,0.1c0.4,0.68,0.63,1.46,0.63,2.29V21l3.5,0 c0.55,0,1-0.45,1-1l0-0.57C24,18.62,23.52,17.9,22.78,17.58z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M16.24,16.65c-1.17-0.52-2.61-0.9-4.24-0.9c-1.63,0-3.07,0.39-4.24,0.9C6.68,17.13,6,18.21,6,19.39L6,20 c0,0.55,0.45,1,1,1h10c0.55,0,1-0.45,1-1l0-0.61C18,18.21,17.32,17.13,16.24,16.65z');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M9,12c0,1.66,1.34,3,3,3s3-1.34,3-3c0-1.66-1.34-3-3-3S9,10.34,9,12z');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGPath(d: 'M2.48,10.86C2.17,10.1,2,9.36,2,8.6C2,6.02,4.02,4,6.6,4c2.68,0,3.82,1.74,5.4,3.59C13.57,5.76,14.7,4,17.4,4 C19.98,4,22,6.02,22,8.6c0,0.76-0.17,1.5-0.48,2.26c0.65,0.31,1.18,0.82,1.53,1.44C23.65,11.1,24,9.88,24,8.6 C24,4.9,21.1,2,17.4,2c-2.09,0-4.09,0.97-5.4,2.51C10.69,2.97,8.69,2,6.6,2C2.9,2,0,4.9,0,8.6c0,1.28,0.35,2.5,0.96,3.7 C1.31,11.68,1.84,11.17,2.48,10.86z');
        $l1I0->addChild($l2I6);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
