<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['search'],
    tags: ['appliance', 'blender', 'cooking', 'electric', 'juicer', 'kitchen', 'machine', 'vitamix'],
)]
final class BlenderSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M18,3h-4V2h-4v1H3v8h4.23l0.64,4.13L6,17v5h12v-5l-1.87-1.87L18,3z M5,9V5h1.31l0.62,4H5z M12,19c-0.55,0-1-0.45-1-1 s0.45-1,1-1s1,0.45,1,1S12.55,19,12,19z M14.29,14H9.72L8.33,5h7.34L14.29,14z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
