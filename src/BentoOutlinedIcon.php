<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['places'],
    tags: ['bento', 'box', 'dinner', 'food', 'lunch', 'meal', 'restaurant', 'takeout'],
)]
final class BentoOutlinedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M20,5H4C2.9,5,2,5.9,2,7v10c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V7C22,5.9,21.1,5,20,5z M20,11h-6V7h6V11z M4,7h8v10H4V7z M14,17v-4h6v4H14z M9.5,12c0,0.83-0.67,1.5-1.5,1.5S6.5,12.83,6.5,12s0.67-1.5,1.5-1.5S9.5,11.17,9.5,12z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
