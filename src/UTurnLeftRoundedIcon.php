<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['arrow', 'arrows', 'direction', 'directions', 'left', 'maps', 'navigation', 'path', 'route', 'sign', 'traffic', 'u-turn'],
)]
final class UTurnLeftRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M3.71,12.29c0.39-0.39,1.02-0.39,1.41,0L6,13.17V9c0-3.31,2.69-6,6-6s6,2.69,6,6v11c0,0.55-0.45,1-1,1s-1-0.45-1-1V9 c0-2.21-1.79-4-4-4S8,6.79,8,9v4.17l0.88-0.88c0.39-0.39,1.02-0.39,1.41,0c0.39,0.39,0.39,1.02,0,1.41l-2.59,2.59 c-0.39,0.39-1.02,0.39-1.41,0l-2.59-2.59C3.32,13.32,3.32,12.68,3.71,12.29z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
