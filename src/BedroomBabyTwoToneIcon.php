<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['search'],
    tags: ['babies', 'baby', 'bedroom', 'child', 'children', 'home', 'horse', 'house', 'infant', 'kid', 'newborn', 'rocking', 'room', 'toddler', 'young'],
)]
final class BedroomBabyTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M4,20h16V4H4V20z M6.45,10.5l-0.95-1L7,7.76L6,7h3.65l1.73,3H17v1h-1v2.5l0.84,1.46 c0.39-0.28,0.76-0.58,1.1-0.92L19,15.1c-1.87,1.87-4.36,2.9-7,2.9s-5.13-1.03-7-2.9l1.06-1.06c0.34,0.34,0.71,0.65,1.1,0.92 L8,13.5V9.51L6.45,10.5z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M15.53,15.71l-0.03-0.06l-0.81-1.41c-1.74,0.65-3.66,0.65-5.4,0l-0.81,1.41l-0.03,0.06 c1.1,0.52,2.28,0.79,3.53,0.79S14.43,16.22,15.53,15.71z');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M7.16,14.96c-0.39-0.27-0.76-0.58-1.1-0.92L5,15.1c1.87,1.87,4.36,2.9,7,2.9s5.13-1.03,7-2.9l-1.06-1.06 c-0.34,0.34-0.71,0.64-1.1,0.92L16,13.5V11h1v-1h-5.62L9.65,7H6l1,0.76L5.5,9.5l0.95,1L8,9.51v3.99L7.16,14.96z M8.48,15.65 l0.81-1.41c1.74,0.65,3.66,0.65,5.4,0l0.81,1.41l0.03,0.06c-1.1,0.51-2.3,0.79-3.55,0.79s-2.43-0.27-3.53-0.79L8.48,15.65z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M20,2H4C2.9,2,2,2.9,2,4v16c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V4C22,2.9,21.1,2,20,2z M20,20H4V4h16V20z');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
