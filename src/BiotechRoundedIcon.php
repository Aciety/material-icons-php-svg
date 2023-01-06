<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['content'],
    tags: ['biotech', 'chemistry', 'laboratory', 'microscope', 'research', 'science', 'technology'],
)]
final class BiotechRoundedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M7,19c-1.1,0-2,0.9-2,2h14c0-1.1-0.9-2-2-2h-4v-2h3c1.1,0,2-0.9,2-2h-8c-1.66,0-3-1.34-3-3c0-1.09,0.59-2.04,1.46-2.56 C8.17,9.03,8,8.54,8,8c0-0.21,0.04-0.42,0.09-0.62C6.28,8.13,5,9.92,5,12c0,2.76,2.24,5,5,5v2H7z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M10.56,5.51C11.91,5.54,13,6.64,13,8c0,0.75-0.33,1.41-0.85,1.87l0.25,0.68c0.19,0.52,0.76,0.79,1.28,0.6 c0.19,0.52,0.76,0.79,1.28,0.6c0.52-0.19,0.79-0.76,0.6-1.28c0.52-0.19,0.79-0.76,0.6-1.28L14.1,3.54 c-0.19-0.52-0.76-0.79-1.28-0.6c-0.19-0.52-0.76-0.79-1.28-0.6c-0.52,0.19-0.79,0.76-0.6,1.28c-0.52,0.19-0.79,0.76-0.6,1.28 L10.56,5.51z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGCircle(cx: '10.5', cy: '8', r: '1.5');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
