<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['auto', 'automobile', 'car', 'cars', 'gauge', 'mechanic', 'pressure', 'repair', 'tire', 'vehicle'],
)]
final class TireRepairOutlinedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M19,8c-0.55,0-1-0.45-1-1c0-0.28,0.11-0.53,0.29-0.71c0.4-0.4,2.46-1.04,2.46-1.04s-0.64,2.06-1.04,2.46 C19.53,7.89,19.28,8,19,8z M20,13v5c0,1.65-1.35,3-3,3s-3-1.35-3-3v-2c0-0.55-0.45-1-1-1s-1,0.45-1,1v3c0,1.1-0.9,2-2,2H4 c-1.1,0-2-0.9-2-2V5c0-1.1,0.9-2,2-2h6c1.1,0,2,0.9,2,2v8.17c0.31-0.11,0.65-0.17,1-0.17c1.65,0,3,1.35,3,3v2c0,0.55,0.45,1,1,1 s1-0.45,1-1v-5h-1l0-1.42c-1.77-0.77-3-2.53-3-4.58c0-2.76,2.24-5,5-5s5,2.24,5,5c0,2.05-1.23,3.81-3,4.58L21,13H20z M22,7 c0-1.66-1.34-3-3-3s-3,1.34-3,3s1.34,3,3,3S22,8.66,22,7z M10,7L8,9V6.17L9.17,5H4.83L6,6.17V9L4,7v2.17l2,2V14l-2-2v2.17l2,2V19 l-2-2v2h6v-2l-2,2v-2.83l2-2V12l-2,2v-2.83l2-2V7z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
