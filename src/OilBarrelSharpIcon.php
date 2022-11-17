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
    tags: ['barrel', 'droplet', 'gas', 'gasoline', 'nest', 'oil', 'water'],
)]
final class OilBarrelSharpIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M21,13v-2h-2V5h2V3H3v2h2v6H3v2h2v6H3v2h18v-2h-2v-6H21z M12,16c-1.66,0-3-1.32-3-2.95c0-1.3,0.52-1.67,3-4.55 c2.47,2.86,3,3.24,3,4.55C15,14.68,13.66,16,12,16z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
