<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['auto', 'automobile', 'car', 'cars', 'gauge', 'mechanic', 'pressure', 'repair', 'tire', 'vehicle'],
)]
final class TireRepairRoundedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M18,7c0,0.55,0.45,1,1,1c0.28,0,0.53-0.11,0.71-0.29c0.4-0.4,1.04-2.46,1.04-2.46s-2.06,0.64-2.46,1.04 C18.11,6.47,18,6.72,18,7z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M19,2c-2.76,0-5,2.24-5,5c0,2.05,1.23,3.81,3,4.58V12c0,0.55,0.45,1,1,1v5c0,0.55-0.45,1-1,1s-1-0.45-1-1v-3 c0-1.65-1.35-3-3-3c-0.35,0-0.69,0.06-1,0.17V5c0-1.1-0.9-2-2-2H4C2.9,3,2,3.9,2,5v14c0,1.1,0.9,2,2,2h6c1.1,0,2-0.9,2-2v-4 c0-0.55,0.45-1,1-1s1,0.45,1,1v3c0,1.65,1.35,3,3,3s3-1.35,3-3v-5c0.55,0,1-0.45,1-1v-0.42c1.77-0.77,3-2.53,3-4.58 C24,4.24,21.76,2,19,2z M6,19.5l-2-2v-2.83l2,2V19.5z M6,14.5l-2-2V9.67l2,2V14.5z M6,9.5l-2-2V4.67l2,2V9.5z M10,17.5l-2,2v-2.83 l2-2V17.5z M10,12.5l-2,2v-2.83l2-2V12.5z M10,7.5l-2,2V6.67l2-2V7.5z M19,10c-1.66,0-3-1.34-3-3s1.34-3,3-3s3,1.34,3,3 S20.66,10,19,10z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
