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
    tags: ['cream', 'dessert', 'food', 'ice', 'icecream', 'snack'],
)]
final class IcecreamIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M8.79,12.4l3.26,6.22l3.17-6.21c-0.11-0.08-0.21-0.16-0.3-0.25 C14.08,12.69,13.07,13,12,13s-2.08-0.31-2.92-0.84C8.99,12.25,8.89,12.33,8.79,12.4z M6.83,12.99C5.25,12.9,4,11.6,4,10 c0-1.49,1.09-2.73,2.52-2.96C6.75,4.22,9.12,2,12,2s5.25,2.22,5.48,5.04C18.91,7.27,20,8.51,20,10c0,1.59-1.24,2.9-2.81,2.99 L12.07,23L6.83,12.99z');
        $l1I0->setStyle('fill-rule', 'evenodd');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
