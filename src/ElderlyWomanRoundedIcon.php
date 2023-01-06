<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['social'],
    tags: ['body', 'cane', 'elderly', 'female', 'gender', 'girl', 'human', 'lady', 'old', 'people', 'person', 'senior', 'social', 'symbol', 'woman', 'women'],
)]
final class ElderlyWomanRoundedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M18.52,11c-1.57,0-2.94-0.9-3.6-2.21l-0.79-1.67l0,0C14.12,7.1,13.63,6,12.34,6l0,0C8.72,6,6,16.69,6,19h2.5L7,21 c-0.33,0.44-0.24,1.07,0.2,1.4c0.44,0.33,1.07,0.24,1.4-0.2L11,19h2v3c0,0.55,0.45,1,1,1h0c0.55,0,1-0.45,1-1v-2.71 c0-0.22-0.04-0.43-0.1-0.64L13,13l0.49-2.71c0.81,1.23,2.05,2.14,3.51,2.52V13c0,0.28,0.22,0.5,0.5,0.5S18,13.28,18,13v-0.5 c0-0.28,0.22-0.5,0.5-0.5s0.5,0.22,0.5,0.5v10c0,0.28,0.22,0.5,0.5,0.5s0.5-0.22,0.5-0.5v-10C20,11.71,19.38,11,18.52,11z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M11.6,2.91c-0.06,0.19-0.1,0.38-0.1,0.59c0,1.1,0.9,2,2,2s2-0.9,2-2c0-1.1-0.9-2-2-2c-0.21,0-0.4,0.04-0.59,0.1 C12.76,1.25,12.41,1,12,1c-0.55,0-1,0.45-1,1C11,2.41,11.25,2.76,11.6,2.91z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
