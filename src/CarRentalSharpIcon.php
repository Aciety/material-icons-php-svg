<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['automobile', 'car', 'cars', 'key', 'maps', 'rental', 'transportation', 'vehicle'],
)]
final class CarRentalSharpIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M10.83,3C10.41,1.83,9.3,1,8,1C6.34,1,5,2.34,5,4c0,1.65,1.34,3,3,3c1.3,0,2.41-0.84,2.83-2H16v2h2V5h1V3H10.83z M8,5 C7.45,5,7,4.55,7,4s0.45-1,1-1s1,0.45,1,1S8.55,5,8,5z M17.11,9H6.89L5,14.69V22h2v-2h10v2h2v-7.31L17.11,9z M9,17.5 c-0.55,0-1-0.45-1-1s0.45-1,1-1s1,0.45,1,1S9.55,17.5,9,17.5z M15,17.5c-0.55,0-1-0.45-1-1s0.45-1,1-1s1,0.45,1,1 S15.55,17.5,15,17.5z M7.67,13l0.66-2h7.34l0.66,2H7.67z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
