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
final class ShowerTwoToneIcon extends SVG
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M12,7c-2.76,0-5,2.24-5,5h10C17,9.24,14.76,7,12,7z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '8', cy: '20', r: '1');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGCircle(cx: '16', cy: '17', r: '1');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M13,5.08V3h-2v2.08C7.61,5.57,5,8.47,5,12v2h14v-2C19,8.47,16.39,5.57,13,5.08z M7,12c0-2.76,2.24-5,5-5s5,2.24,5,5H7z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGCircle(cx: '16', cy: '20', r: '1');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGCircle(cx: '12', cy: '17', r: '1');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGCircle(cx: '8', cy: '17', r: '1');
        $l1I0->addChild($l2I6);
        $l2I7 = new SVGCircle(cx: '12', cy: '20', r: '1');
        $l1I0->addChild($l2I7);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
