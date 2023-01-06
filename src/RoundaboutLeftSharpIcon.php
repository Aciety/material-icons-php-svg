<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['arrow', 'arrows', 'direction', 'directions', 'left', 'maps', 'navigation', 'path', 'roundabout', 'route', 'sign', 'traffic'],
)]
final class RoundaboutLeftSharpIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M16,13c2.21,0,4-1.79,4-4s-1.79-4-4-4c-2.21,0-4,1.79-4,4l0,1l-6.17,0l1.59,1.59L6,13L2,9l4-4l1.41,1.41L5.83,8l4.25,0 c0.48-2.84,2.94-5,5.92-5c3.31,0,6,2.69,6,6c0,2.97-2.16,5.44-5,5.92L17,21h-2l0-8L16,13z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
