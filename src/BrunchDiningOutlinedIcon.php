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
    tags: ['breakfast', 'brunch', 'champagne', 'dining', 'drink', 'food', 'lunch', 'meal'],
)]
final class BrunchDiningOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: '0', width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M2,21.5C2,21.78,2.22,22,2.49,22h13.02c0.27,0,0.49-0.22,0.49-0.5V20H2V21.5z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M15.5,16H11v-2H7v2H2.5C2.22,16,2,16.22,2,16.5V18h14v-1.5C16,16.22,15.78,16,15.5,16z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M20.47,15.45c0.99-1.07,1.53-2.48,1.53-3.94V2h-6v9.47c0,1.48,0.58,2.92,1.6,4l0.4,0.42V22h4v-2h-2v-4.03L20.47,15.45z M18,4h2v4h-2V4z M19.03,14.07c-0.65-0.71-1.03-1.65-1.03-2.6V10h2v1.51C20,12.46,19.66,13.36,19.03,14.07z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
