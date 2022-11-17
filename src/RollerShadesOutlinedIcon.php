<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['home'],
    tags: ['blinds', 'cover', 'curtains', 'nest', 'open', 'roller', 'shade', 'shutter', 'sunshade'],
)]
final class RollerShadesOutlinedIcon extends SVG
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
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M20,19V3H4v16H2v2h20v-2H20z M18,5v6H6V5H18z M6,19v-6h5v1.82c-0.45,0.32-0.75,0.84-0.75,1.43c0,0.97,0.78,1.75,1.75,1.75 s1.75-0.78,1.75-1.75c0-0.59-0.3-1.12-0.75-1.43V13h5v6H6z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
