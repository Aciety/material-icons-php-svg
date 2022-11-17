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
    tags: ['arts', 'athlete', 'athletic', 'entertainment', 'exercise', 'hobby', 'human', 'karate', 'martial', 'people', 'person', 'social', 'sports'],
)]
final class SportsMartialArtsRoundedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M19.06,2.6L11.6,8.7l-1.21-1.04l2.48-1.43c0.57-0.33,0.67-1.11,0.21-1.57l-2.95-2.95c-0.39-0.39-1.02-0.39-1.41,0l0,0 c-0.39,0.39-0.39,1.02,0,1.41l2.03,2.03L5.35,8.26c-0.23,0.13-0.39,0.35-0.46,0.6l-0.96,3.49c-0.07,0.26-0.04,0.53,0.1,0.77 l1.74,3.02c0.28,0.48,0.89,0.64,1.37,0.37h0c0.48-0.28,0.64-0.89,0.37-1.37l-1.53-2.66l0.36-1.29L9.5,13l0.44,8 c0.03,0.56,0.49,1,1.05,1h0c0.56,0,1.02-0.44,1.05-1l0.45-9l7.87-7.96c0.36-0.36,0.38-0.93,0.05-1.32l0,0 C20.07,2.32,19.47,2.27,19.06,2.6z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '5', cy: '5', r: '2');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
