<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['places'],
    tags: [],
)]
final class DeskRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M2,7v10c0,0.55,0.45,1,1,1h0c0.55,0,1-0.45,1-1V8h10v9c0,0.55,0.45,1,1,1h0c0.55,0,1-0.45,1-1v-1h4v1c0,0.55,0.45,1,1,1h0 c0.55,0,1-0.45,1-1V7c0-0.55-0.45-1-1-1H3C2.45,6,2,6.45,2,7z M20,8v2h-4V8H20z M16,14v-2h4v2H16z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
