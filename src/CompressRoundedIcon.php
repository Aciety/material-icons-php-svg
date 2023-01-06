<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['arrow', 'arrows', 'collide', 'compress', 'pressure', 'push', 'together'],
)]
final class CompressRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M4,10L4,10c0,0.55,0.45,1,1,1h14c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1H5C4.45,9,4,9.45,4,10z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M14.79,4H13V2c0-0.55-0.45-1-1-1h0c-0.55,0-1,0.45-1,1v2H9.21C8.76,4,8.54,4.54,8.85,4.85l2.79,2.79 c0.2,0.2,0.51,0.2,0.71,0l2.79-2.79C15.46,4.54,15.24,4,14.79,4z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M9.21,19H11v2c0,0.55,0.45,1,1,1h0c0.55,0,1-0.45,1-1v-2h1.79c0.45,0,0.67-0.54,0.35-0.85l-2.79-2.79 c-0.2-0.2-0.51-0.2-0.71,0l-2.79,2.79C8.54,18.46,8.76,19,9.21,19z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M5,14h14c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1H5c-0.55,0-1,0.45-1,1v0C4,13.55,4.45,14,5,14z');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
