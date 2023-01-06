<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['communication', 'nat'],
)]
final class NatRoundedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M6.82,13H11v-2H6.82C6.4,9.84,5.3,9,4,9c-1.66,0-3,1.34-3,3s1.34,3,3,3C5.3,15,6.4,14.16,6.82,13z M4,13 c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1s1,0.45,1,1C5,12.55,4.55,13,4,13z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M22.47,12.4c0.27-0.2,0.27-0.6,0-0.8L19,9v2h-4.05c-0.47-4.69-4.16-8.42-8.83-8.94C5.52,2,5,2.46,5,3.06v0 c0,0.5,0.37,0.93,0.87,0.99C9.88,4.48,13,7.87,13,12s-3.12,7.52-7.13,7.95C5.37,20.01,5,20.44,5,20.94v0c0,0.6,0.52,1.07,1.11,1 c4.67-0.52,8.37-4.25,8.83-8.94H19v2L22.47,12.4z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
