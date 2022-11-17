<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['arrow', 'arrows', 'chevron', 'collapse', 'direction', 'double', 'expand', 'expandable', 'inward', 'less', 'list', 'navigation', 'unfold', 'up'],
)]
final class UnfoldLessDoubleRoundedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M14.46,5.7l-2.47,2.46L9.53,5.7c-0.39-0.39-1.02-0.39-1.41,0s-0.39,1.02,0,1.41l3.17,3.18c0.39,0.39,1.02,0.39,1.41,0 l3.17-3.18c0.39-0.39,0.39-1.02,0-1.41S14.85,5.31,14.46,5.7z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M14.46,0.7l-2.47,2.46L9.53,0.7c-0.39-0.39-1.02-0.39-1.41,0s-0.39,1.02,0,1.41l3.17,3.18c0.39,0.39,1.02,0.39,1.41,0 l3.17-3.18c0.39-0.39,0.39-1.02,0-1.41S14.85,0.31,14.46,0.7z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M9.54,23.3l2.47-2.46l2.46,2.46c0.39,0.39,1.02,0.39,1.41,0c0.39-0.39,0.39-1.02,0-1.41l-3.17-3.18 c-0.39-0.39-1.02-0.39-1.41,0l-3.17,3.18c-0.39,0.39-0.39,1.02,0,1.41C8.52,23.69,9.15,23.69,9.54,23.3z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M9.54,18.29l2.47-2.45l2.46,2.46c0.39,0.39,1.02,0.39,1.41,0c0.39-0.39,0.39-1.02,0-1.41l-3.17-3.18 c-0.39-0.39-1.02-0.39-1.41,0l-3.17,3.17c-0.39,0.39-0.39,1.02,0,1.41S9.15,18.68,9.54,18.29z');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
