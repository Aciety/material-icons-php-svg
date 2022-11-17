<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['arrow', 'arrows', 'direction', 'directions', 'maps', 'navigation', 'path', 'right', 'route', 'sign', 'traffic', 'u-turn'],
)]
final class UTurnRightRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M20.29,12.29c-0.39-0.39-1.02-0.39-1.41,0L18,13.17V9c0-3.31-2.69-6-6-6S6,5.69,6,9v11c0,0.55,0.45,1,1,1s1-0.45,1-1V9 c0-2.21,1.79-4,4-4s4,1.79,4,4v4.17l-0.88-0.88c-0.39-0.39-1.02-0.39-1.41,0c-0.39,0.39-0.39,1.02,0,1.41l2.59,2.59 c0.39,0.39,1.02,0.39,1.41,0l2.59-2.59C20.68,13.32,20.68,12.68,20.29,12.29z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
