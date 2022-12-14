<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['breakfast', 'dining', 'dinner', 'food', 'fork', 'lunch', 'meal', 'restaurant', 'spaghetti', 'utensils'],
)]
final class DinnerDiningRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M2.85,19.85l1,1C3.95,20.95,4.07,21,4.21,21h15.59c0.13,0,0.26-0.05,0.35-0.15l1-1c0.31-0.31,0.09-0.85-0.35-0.85H3.21 C2.76,19,2.54,19.54,2.85,19.85z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M3,18l16.97,0c0,0,0,0,0,0c0.29-3.26-2.28-6-5.48-6c-2.35,0-4.35,1.48-5.14,3.55C8.94,15.32,8.48,15.17,8,15.08V9h1.75 C10.99,9,12,7.99,12,6.75v0h8.25C20.66,6.75,21,6.41,21,6s-0.34-0.75-0.75-0.75H12v0C12,4.01,10.99,3,9.75,3h-6 C3.34,3,3,3.34,3,3.75S3.34,4.5,3.75,4.5H4v0.75H3.75C3.34,5.25,3,5.59,3,6s0.34,0.75,0.75,0.75H4V7.5H3.75 C3.34,7.5,3,7.84,3,8.25S3.34,9,3.75,9H4v7.39C3.56,16.85,3.22,17.39,3,18z M8,4.5h2v0.75H8V4.5z M8,6.75h2V7.5H8V6.75z M5.5,4.5 h1v0.75h-1V4.5z M5.5,6.75h1V7.5h-1V6.75z M5.5,9h1v6.06c-0.35,0.06-0.68,0.17-1,0.3V9z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
