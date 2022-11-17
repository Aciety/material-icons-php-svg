<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['search'],
    tags: ['bath', 'bathroom', 'closet', 'home', 'house', 'place', 'plumbing', 'room', 'shower', 'sprinkler', 'wash', 'water', 'wc'],
)]
final class ShowerRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGCircle(cx: '8', cy: '17', r: '1');
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGCircle(cx: '12', cy: '17', r: '1');
        $l0I1->addChild($l1I1);
        $l1I2 = new SVGCircle(cx: '16', cy: '17', r: '1');
        $l0I1->addChild($l1I2);
        $l1I3 = new SVGPath(d: 'M13,5.08V4c0-0.55-0.45-1-1-1h0c-0.55,0-1,0.45-1,1v1.08C7.61,5.57,5,8.47,5,12v1c0,0.55,0.45,1,1,1h12c0.55,0,1-0.45,1-1 v-1C19,8.47,16.39,5.57,13,5.08z');
        $l0I1->addChild($l1I3);
        $l1I4 = new SVGCircle(cx: '8', cy: '20', r: '1');
        $l0I1->addChild($l1I4);
        $l1I5 = new SVGCircle(cx: '12', cy: '20', r: '1');
        $l0I1->addChild($l1I5);
        $l1I6 = new SVGCircle(cx: '16', cy: '20', r: '1');
        $l0I1->addChild($l1I6);
        $doc->addChild($l0I1);
    }
}
