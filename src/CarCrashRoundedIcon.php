<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['accident', 'automobile', 'car', 'cars', 'collision', 'crash', 'direction', 'maps', 'public', 'transportation', 'vehicle'],
)]
final class CarCrashRoundedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M18,1c-2.76,0-5,2.24-5,5s2.24,5,5,5s5-2.24,5-5S20.76,1,18,1z M18,7c-0.28,0-0.5-0.22-0.5-0.5v-3C17.5,3.22,17.72,3,18,3 s0.5,0.22,0.5,0.5v3C18.5,6.78,18.28,7,18,7z M18.5,8.5C18.5,8.78,18.28,9,18,9s-0.5-0.22-0.5-0.5S17.72,8,18,8 S18.5,8.22,18.5,8.5z M19.5,20c0.82,0,1.5-0.67,1.5-1.5v-6.18c-1.05,0.51-2.16,0.69-3.09,0.68c0.06,0.16,0.09,0.33,0.09,0.5 c0,0.83-0.67,1.5-1.5,1.5S15,14.33,15,13.5c0-0.39,0.15-0.74,0.39-1.01c-1.63-0.66-2.96-1.91-3.71-3.49H5.81l1.04-3H11 c0-0.69,0.1-1.37,0.29-2H6.5C5.84,4,5.29,4.42,5.08,5.01l-1.97,5.67C3.04,10.89,3,11.11,3,11.34v7.16C3,19.33,3.67,20,4.5,20 S6,19.33,6,18.5V18h12v0.5C18,19.33,18.68,20,19.5,20z M7.5,15C6.67,15,6,14.33,6,13.5S6.67,12,7.5,12S9,12.67,9,13.5 S8.33,15,7.5,15z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
