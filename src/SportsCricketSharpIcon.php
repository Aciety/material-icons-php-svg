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
    tags: ['athlete', 'athletic', 'ball', 'bat', 'cricket', 'entertainment', 'exercise', 'game', 'hobby', 'social', 'sports'],
)]
final class SportsCricketSharpIcon extends SVG
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
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M15.05,12.81L6.56,4.32c-0.39-0.39-1.02-0.39-1.41,0L2.32,7.15c-0.39,0.39-0.39,1.02,0,1.41l8.49,8.49 c0.39,0.39,1.02,0.39,1.41,0l2.83-2.83C15.44,13.83,15.44,13.2,15.05,12.81z');
        $l2I0->addChild($l3I0);
        $l3I1 = new SVGRect(x: '16.17', y: '16.17', width: '2', height: '6');
        $l3I1->setAttribute('transform', 'matrix(0.7071 -0.7071 0.7071 0.7071 -8.5264 17.7562)');
        $l2I0->addChild($l3I1);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '18.5', cy: '5.5', r: '3.5');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
