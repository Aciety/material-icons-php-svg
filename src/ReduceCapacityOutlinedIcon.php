<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['social'],
    tags: ['arrow', 'body', 'capacity', 'covid', 'decrease', 'down', 'human', 'people', 'person', 'reduce', 'social'],
)]
final class ReduceCapacityOutlinedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M16,4c0-1.1,0.9-2,2-2s2,0.9,2,2s-0.9,2-2,2S16,5.1,16,4z M20.78,7.58C19.93,7.21,18.99,7,18,7c-0.67,0-1.31,0.1-1.92,0.28 C16.66,7.83,17,8.6,17,9.43V10h5V9.43C22,8.62,21.52,7.9,20.78,7.58z M6,6c1.1,0,2-0.9,2-2S7.1,2,6,2S4,2.9,4,4S4.9,6,6,6z M7.92,7.28C7.31,7.1,6.67,7,6,7C5.01,7,4.07,7.21,3.22,7.58C2.48,7.9,2,8.62,2,9.43V10h5V9.43C7,8.6,7.34,7.83,7.92,7.28z M10,4 c0-1.1,0.9-2,2-2s2,0.9,2,2s-0.9,2-2,2S10,5.1,10,4z M16,10H8V9.43C8,8.62,8.48,7.9,9.22,7.58C10.07,7.21,11.01,7,12,7 c0.99,0,1.93,0.21,2.78,0.58C15.52,7.9,16,8.62,16,9.43V10z M15,16c0-1.1,0.9-2,2-2s2,0.9,2,2s-0.9,2-2,2S15,17.1,15,16z M21,22h-8 v-0.57c0-0.81,0.48-1.53,1.22-1.85C15.07,19.21,16.01,19,17,19c0.99,0,1.93,0.21,2.78,0.58C20.52,19.9,21,20.62,21,21.43V22z M5,16 c0-1.1,0.9-2,2-2s2,0.9,2,2s-0.9,2-2,2S5,17.1,5,16z M11,22H3v-0.57c0-0.81,0.48-1.53,1.22-1.85C5.07,19.21,6.01,19,7,19 c0.99,0,1.93,0.21,2.78,0.58C10.52,19.9,11,20.62,11,21.43V22z M12.75,13v-2h-1.5v2H9l3,3l3-3H12.75z');
        $doc->addChild($l0I1);
    }
}
