<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['home'],
    tags: ['barrel', 'droplet', 'gas', 'gasoline', 'nest', 'oil', 'water'],
)]
final class OilBarrelTwoToneIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M7,11c0.55,0,1,0.45,1,1s-0.45,1-1,1v6h10v-6c-0.55,0-1-0.45-1-1s0.45-1,1-1V5H7V11z M12,8.5 c2.47,2.86,3,3.24,3,4.55c0,1.63-1.34,2.95-3,2.95s-3-1.32-3-2.95C9,11.75,9.52,11.38,12,8.5z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M12,16c1.66,0,3-1.32,3-2.95c0-1.31-0.53-1.69-3-4.55c-2.48,2.88-3,3.25-3,4.55C9,14.68,10.34,16,12,16z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M20,13c0.55,0,1-0.45,1-1s-0.45-1-1-1h-1V5h1c0.55,0,1-0.45,1-1s-0.45-1-1-1H4C3.45,3,3,3.45,3,4s0.45,1,1,1h1v6H4 c-0.55,0-1,0.45-1,1s0.45,1,1,1h1v6H4c-0.55,0-1,0.45-1,1s0.45,1,1,1h16c0.55,0,1-0.45,1-1s-0.45-1-1-1h-1v-6H20z M17,11 c-0.55,0-1,0.45-1,1s0.45,1,1,1v6H7v-6c0.55,0,1-0.45,1-1s-0.45-1-1-1V5h10V11z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
