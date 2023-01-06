<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['social'],
    tags: ['account', 'choices', 'face', 'human', 'multiple', 'options', 'people', 'person', 'profile', 'social', 'switch', 'user'],
)]
final class SwitchAccountRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M17,20H4V7c0-0.55-0.45-1-1-1S2,6.45,2,7v13c0,1.1,0.9,2,2,2h13c0.55,0,1-0.45,1-1S17.55,20,17,20z M20,2H8 C6.9,2,6,2.9,6,4v12c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V4C22,2.9,21.1,2,20,2z M14,5c1.66,0,3,1.34,3,3c0,1.66-1.34,3-3,3 s-3-1.34-3-3C11,6.34,12.34,5,14,5z M7.76,16c1.47-1.83,3.71-3,6.24-3s4.77,1.17,6.24,3H7.76z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
