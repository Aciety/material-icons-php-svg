<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['arts', 'athlete', 'athletic', 'entertainment', 'exercise', 'hobby', 'human', 'karate', 'martial', 'people', 'person', 'social', 'sports'],
)]
final class SportsMartialArtsTwoToneIcon extends SVG
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
        $l2I0 = new SVGPolygon(points: [[19.8, 2], [11.6, 8.699999999999999], [10.39, 7.66], [13.99, 5.58], [9.41, 1], [8, 2.41], [10.74, 5.15], [5, 8.460000000000001], [3.81, 12.75], [6.27, 17], [8, 16], [5.97, 12.48], [6.32, 11.18], [9.5, 13], [10, 22], [12, 22], [12.5, 12], [21, 3.4]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '5', cy: '5', r: '2');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
