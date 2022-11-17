<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['alcohol', 'bar', 'bottle', 'club', 'cocktail', 'dance', 'drink', 'food', 'glass', 'liquor', 'music', 'nightlife', 'note', 'wine'],
)]
final class NightlifeRoundedIcon extends SVG
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
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M2.87,5h10.26c0.8,0,1.28,0.89,0.83,1.55L9,14v4h1c0.55,0,1,0.45,1,1v0c0,0.55-0.45,1-1,1H6c-0.55,0-1-0.45-1-1v0 c0-0.55,0.45-1,1-1h1v-4L2.04,6.55C1.59,5.89,2.07,5,2.87,5z M10.1,9l1.4-2H4.49l1.4,2H10.1z M19,5h1.5C21.33,5,22,5.67,22,6.5v0 C22,7.33,21.33,8,20.5,8H19v9l0,0c0,1.84-1.64,3.28-3.54,2.95c-1.21-0.21-2.2-1.2-2.41-2.41C12.72,15.64,14.16,14,16,14 c0.35,0,0.69,0.06,1,0.17V7C17,5.9,17.9,5,19,5z');
        $l2I0->addChild($l3I0);
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
