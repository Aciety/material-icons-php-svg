<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['accident', 'auto', 'automobile', 'car', 'cars', 'collision', 'directions', 'maps', 'public', 'transportation', 'vehicle'],
)]
final class MinorCrashTwoToneIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M5,15v5h14v-5H5z M7.5,19C6.67,19,6,18.33,6,17.5S6.67,16,7.5,16S9,16.67,9,17.5S8.33,19,7.5,19z M16.5,19 c-0.83,0-1.5-0.67-1.5-1.5s0.67-1.5,1.5-1.5s1.5,0.67,1.5,1.5S17.33,19,16.5,19z');
        $l1I0->setStyle('opacity', '.3');
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M9.41,5L8,6.41l-3-3L6.41,2L9.41,5z M19,3.41L17.59,2l-3,3L16,6.41L19,3.41z M13,0h-2v5h2V0z M21,15v8c0,0.55-0.45,1-1,1 h-1c-0.55,0-1-0.45-1-1v-1H6v1c0,0.55-0.45,1-1,1H4c-0.55,0-1-0.45-1-1v-8l2.08-5.99C5.29,8.42,5.84,8,6.5,8h11 c0.66,0,1.22,0.42,1.42,1.01L21,15z M5.81,13h12.38l-1.04-3H6.85L5.81,13z M19,15H5v5h14V15z M7.5,19C8.33,19,9,18.33,9,17.5 S8.33,16,7.5,16S6,16.67,6,17.5S6.67,19,7.5,19z M16.5,19c0.83,0,1.5-0.67,1.5-1.5S17.33,16,16.5,16S15,16.67,15,17.5 S15.67,19,16.5,19z');
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
