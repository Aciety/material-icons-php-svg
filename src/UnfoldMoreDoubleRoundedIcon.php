<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['arrow', 'arrows', 'chevron', 'collapse', 'direction', 'double', 'down', 'expand', 'expandable', 'list', 'more', 'navigation', 'unfold'],
)]
final class UnfoldMoreDoubleRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M9.53,5.29L12,2.83l2.46,2.46c0.39,0.39,1.02,0.39,1.41,0s0.39-1.02,0-1.41L12.7,0.7c-0.39-0.39-1.02-0.39-1.41,0 L8.12,3.88c-0.39,0.39-0.39,1.02,0,1.41S9.14,5.68,9.53,5.29z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M9.53,10.29L12,7.83l2.46,2.46c0.39,0.39,1.02,0.39,1.41,0s0.39-1.02,0-1.41L12.7,5.7c-0.39-0.39-1.02-0.39-1.41,0 L8.12,8.88c-0.39,0.39-0.39,1.02,0,1.41S9.14,10.68,9.53,10.29z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M14.47,13.71L12,16.17l-2.46-2.46c-0.39-0.39-1.02-0.39-1.41,0c-0.39,0.39-0.39,1.02,0,1.41l3.17,3.18 c0.39,0.39,1.02,0.39,1.41,0l3.17-3.18c0.39-0.39,0.39-1.02,0-1.41C15.49,13.32,14.86,13.32,14.47,13.71z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M14.47,18.72L12,21.17l-2.46-2.46c-0.39-0.39-1.02-0.39-1.41,0c-0.39,0.39-0.39,1.02,0,1.41l3.17,3.18 c0.39,0.39,1.02,0.39,1.41,0l3.17-3.17c0.39-0.39,0.39-1.02,0-1.41S14.86,18.33,14.47,18.72z');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
