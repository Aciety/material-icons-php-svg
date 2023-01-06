<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['break', 'construction', 'hammer', 'hardware', 'nail', 'repair', 'tool'],
)]
final class HardwareSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: '0', width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGGroup();
        $l4I0 = new SVGPath(d: 'M18,3l-3,3V3H9C6.24,3,4,5.24,4,8h5v3h6V8l3,3h2V3H18z');
        $l3I0->addChild($l4I0);
        $l2I0->addChild($l3I0);
        $l3I1 = new SVGGroup();
        $l4I0 = new SVGPath(d: 'M9,13v8h6v-8H9z');
        $l3I1->addChild($l4I0);
        $l2I0->addChild($l3I1);
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
