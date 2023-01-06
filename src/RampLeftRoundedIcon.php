<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['arrow', 'arrows', 'direction', 'directions', 'left', 'maps', 'navigation', 'path', 'ramp', 'route', 'sign', 'traffic'],
)]
final class RampLeftRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M12,21c-0.55,0-1-0.45-1-1V6.83l-0.88,0.88C9.73,8.1,9.1,8.1,8.71,7.71c-0.39-0.39-0.39-1.02,0-1.41l2.59-2.59 c0.39-0.39,1.02-0.39,1.41,0l2.59,2.59c0.39,0.39,0.39,1.02,0,1.41c-0.39,0.39-1.02,0.39-1.41,0L13,6.83v0V9 c0,3.62,2.89,6.22,4.97,7.62c0.52,0.35,0.59,1.09,0.14,1.53c-0.33,0.33-0.87,0.4-1.26,0.13c-1.59-1.06-2.89-2.28-3.85-3.59l0,5.3 C13,20.55,12.55,21,12,21z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
