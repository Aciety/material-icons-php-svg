<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['arrow', 'direction', 'down', 'jump', 'move', 'navigation', 'transfer'],
)]
final class MoveDownRoundedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M3.01,10.72c-0.14,2.57,1.66,4.73,4.07,5.18l-0.79-0.79c-0.39-0.39-0.39-1.02,0-1.41l0,0c0.39-0.39,1.02-0.39,1.41,0 l2.59,2.59c0.39,0.39,0.39,1.02,0,1.41L7.71,20.3c-0.39,0.39-1.02,0.39-1.41,0h0c-0.39-0.39-0.39-1.02,0-1.41l0.88-0.88l0-0.06 c-3.64-0.43-6.43-3.65-6.15-7.47C1.29,6.78,4.55,4,8.26,4L10,4c0.55,0,1,0.45,1,1v0c0,0.55-0.45,1-1,1L8.22,6 C5.52,6,3.15,8.04,3.01,10.72z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M15,11h5c1.1,0,2-0.9,2-2V6c0-1.1-0.9-2-2-2h-5c-1.1,0-2,0.9-2,2v3C13,10.1,13.9,11,15,11z M20,9h-5V6h5V9z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M20,20h-5c-1.1,0-2-0.9-2-2v-3c0-1.1,0.9-2,2-2h5c1.1,0,2,0.9,2,2v3C22,19.1,21.1,20,20,20z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
