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
final class BiotechTwoToneIcon extends SvgIcon
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGRect(x: '12.75', y: '4.54', width: '1', height: '5');
        $l2I0->setAttribute('transform', 'matrix(0.9397 -0.342 0.342 0.9397 -1.6091 4.9556)');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '10.5', cy: '8', r: '1');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M7,19c-1.1,0-2,0.9-2,2h14c0-1.1-0.9-2-2-2h-4v-2h3c1.1,0,2-0.9,2-2h-8c-1.66,0-3-1.34-3-3c0-1.09,0.59-2.04,1.47-2.57 c0.41,0.59,1.06,1,1.83,1.06c0.7,0.06,1.36-0.19,1.85-0.62l0.59,1.61l0.94-0.34l0.34,0.94l1.88-0.68l-0.34-0.94l0.94-0.34 L13.76,2.6l-0.94,0.34L12.48,2L10.6,2.68l0.34,0.94L10,3.97l0.56,1.55C9.39,5.48,8.37,6.27,8.08,7.38C6.27,8.14,5,9.92,5,12 c0,2.76,2.24,5,5,5v2H7z M12.86,4.52l1.71,4.7l-0.94,0.34l-1.71-4.7L12.86,4.52z M10.5,7c0.55,0,1,0.45,1,1c0,0.55-0.45,1-1,1 c-0.55,0-1-0.45-1-1C9.5,7.45,9.95,7,10.5,7z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
