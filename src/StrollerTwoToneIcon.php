<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['places'],
    tags: ['baby', 'care', 'carriage', 'child', 'children', 'infant', 'kid', 'newborn', 'stroller', 'toddler', 'young'],
)]
final class StrollerTwoToneIcon extends SVG
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
        $l1I1 = new SVGPath(d: 'M10,5c0.29,0,0.58,0.02,0.86,0.05L9.49,6.66l-1.4-1.4C8.71,5.09,9.35,5,10,5 M15,8.66V15H9.6L15,8.66');
        $l1I1->setStyle('opacity', '.3');
        $l0I0->addChild($l1I1);
        $l1I2 = new SVGPath(d: 'M10,5c0.29,0,0.58,0.02,0.86,0.05L9.49,6.66l-1.4-1.4C8.71,5.09,9.35,5,10,5 M15,8.66V15H9.6L15,8.66 M18.65,3 c-1.66,0-2.54,1.27-3.18,2.03l-8.8,10.32C6.12,16,6.58,17,7.43,17H15c1.1,0,2-0.9,2-2V6.27C17.58,5.59,17.97,5,18.65,5 C19.42,5,20,5.66,20,6.48V7h2V6.48C22,4.56,20.52,3,18.65,3L18.65,3z M10,3C8.03,3,6.21,3.64,4.72,4.72l4.89,4.89l4.7-5.51 C13.03,3.4,11.56,3,10,3L10,3z M16,18c-1.1,0-2,0.9-2,2s0.9,2,2,2s2-0.9,2-2S17.1,18,16,18L16,18z M6,18c-1.1,0-2,0.9-2,2 s0.9,2,2,2s2-0.9,2-2S7.1,18,6,18L6,18z');
        $l0I0->addChild($l1I2);
        $doc->addChild($l0I0);
    }
}
