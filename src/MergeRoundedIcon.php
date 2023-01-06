<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['arrow', 'arrows', 'direction', 'directions', 'maps', 'merge', 'navigation', 'path', 'route', 'sign', 'traffic'],
)]
final class MergeRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M8.71,7.71c-0.39-0.39-0.39-1.02,0-1.41l2.59-2.59c0.39-0.39,1.02-0.39,1.41,0l2.59,2.59c0.39,0.39,0.39,1.02,0,1.41 c-0.39,0.39-1.02,0.39-1.41,0L13,6.83v5.1c0,1.06,0.42,2.08,1.17,2.83l4.12,4.12c0.39,0.39,0.39,1.02,0,1.41s-1.02,0.39-1.41,0 L12,15.41l-4.88,4.88c-0.39,0.39-1.02,0.39-1.41,0c-0.39-0.39-0.39-1.02,0-1.41l4.12-4.12c0.75-0.75,1.17-1.77,1.17-2.83v-5.1 l-0.88,0.88C9.73,8.1,9.1,8.1,8.71,7.71z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
