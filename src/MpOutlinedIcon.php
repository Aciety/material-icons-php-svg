<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['image'],
    tags: ['alphabet', 'character', 'font', 'image', 'letter', 'megapixel', 'mp', 'photo', 'photography', 'pixels', 'quality', 'resolution', 'symbol', 'text', 'type'],
)]
final class MpOutlinedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M17,9h-3.5v6H15v-1.5h2c0.55,0,1-0.45,1-1V10C18,9.45,17.55,9,17,9z M16.5,12H15v-1.5h1.5V12z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M11.5,9H7c-0.55,0-1,0.45-1,1v5h1.5v-4.5h1v3H10v-3h1V15h1.5v-5C12.5,9.45,12.05,9,11.5,9z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M19,3H5C3.9,3,3,3.9,3,5V19c0,1.1,0.9,2,2,2H19c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M5,19L5,5h14l0,14L5,19z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
