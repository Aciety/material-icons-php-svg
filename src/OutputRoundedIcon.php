<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: [],
)]
final class OutputRoundedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M17.71,16.29l3.59-3.59c0.39-0.39,0.39-1.02,0-1.41l-3.59-3.59c-0.39-0.39-1.02-0.39-1.41,0v0 c-0.39,0.39-0.39,1.02,0,1.41L18.17,11H10c-0.55,0-1,0.45-1,1v0c0,0.55,0.45,1,1,1h8.17l-1.88,1.88c-0.39,0.39-0.39,1.02,0,1.41 l0,0C16.68,16.68,17.32,16.68,17.71,16.29z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M19,19H5V5h14v1c0,0.55,0.45,1,1,1h0c0.55,0,1-0.45,1-1V5c0-1.1-0.9-2-2-2H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14 c1.11,0,2-0.9,2-2v-1c0-0.55-0.45-1-1-1h0c-0.55,0-1,0.45-1,1V19z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
