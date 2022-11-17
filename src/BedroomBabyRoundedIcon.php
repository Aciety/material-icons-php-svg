<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['search'],
    tags: ['babies', 'baby', 'bedroom', 'child', 'children', 'home', 'horse', 'house', 'infant', 'kid', 'newborn', 'rocking', 'room', 'toddler', 'young'],
)]
final class BedroomBabyRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M20,2H4C2.9,2,2,2.9,2,4v16c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V4C22,2.9,21.1,2,20,2z M12,17.99 c-2.37,0-4.61-0.83-6.4-2.35c-0.33-0.28-0.35-0.8-0.04-1.11l0,0c0.27-0.27,0.71-0.29,1.01-0.04c0.19,0.16,0.39,0.31,0.6,0.46 L8,13.49V9.5l-1,0.65c-0.32,0.21-0.73,0.16-0.99-0.12L6,10.01c-0.29-0.3-0.3-0.77-0.03-1.08C6.27,8.6,6.62,8.19,6.83,7.95 C6.92,7.84,6.9,7.67,6.79,7.59c0,0-0.81-0.31-0.79-0.57C6,6.91,9.36,6.99,9.36,6.99c0.18,0,0.34,0.1,0.43,0.25l1.44,2.5 c0.09,0.15,0.25,0.25,0.43,0.25h4.83c0.28,0,0.5,0.22,0.5,0.5v0c0,0.28-0.22,0.5-0.5,0.5H16v2.5l0.84,1.46 c0.2-0.15,0.4-0.3,0.6-0.46c0.3-0.25,0.73-0.23,1.01,0.04v0c0.31,0.31,0.29,0.82-0.04,1.11C16.61,17.16,14.37,17.99,12,17.99z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M14.69,14.24c-1.74,0.65-3.66,0.65-5.4,0l-0.81,1.41l-0.03,0.06c1.1,0.52,2.28,0.79,3.53,0.79s2.45-0.28,3.55-0.79 l-0.03-0.06L14.69,14.24z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
