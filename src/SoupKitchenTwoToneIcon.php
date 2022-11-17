<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['breakfast', 'brunch', 'dining', 'food', 'kitchen', 'lunch', 'meal', 'soup'],
)]
final class SoupKitchenTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M14.12,17c-0.73,1.78-2.43,3-4.37,3c-1.94,0-3.67-1.23-4.43-3h8.78');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M6.4,7C6.06,7.55,6,7.97,6,8.38C6,9.15,7,11,7,12c0,0.95-0.4,1.5-0.4,1.5H5.1c0,0,0.4-0.55,0.4-1.5c0-1-1-2.85-1-3.62 C4.5,7.97,4.56,7.55,4.9,7H6.4z M11.4,7C11.06,7.55,11,7.97,11,8.38C11,9.15,12,11,12,12c0,0.95-0.4,1.5-0.4,1.5h1.5 c0,0,0.4-0.55,0.4-1.5c0-1-1-2.85-1-3.62c0-0.41,0.06-0.83,0.4-1.38H11.4z M8.15,7c-0.34,0.55-0.4,0.97-0.4,1.38 c0,0.77,1,2.63,1,3.62c0,0.95-0.4,1.5-0.4,1.5h1.5c0,0,0.4-0.55,0.4-1.5c0-1-1-2.85-1-3.62c0-0.41,0.06-0.83,0.4-1.38H8.15z M18.6,2 c-1.54,0-2.81,1.16-2.98,2.65L14.53,15H4.01c-0.6,0-1.09,0.53-1,1.13C3.53,19.46,6.39,22,9.75,22c3.48,0,6.34-2.73,6.71-6.23 l1.15-10.87C17.66,4.39,18.08,4,18.6,4c0.55,0,1,0.45,1,1c0,0.3-0.1,1.25-0.1,1.25l1.97,0.25c0,0,0.13-1.06,0.13-1.5 C21.6,3.35,20.25,2,18.6,2z M9.75,20c-1.94,0-3.67-1.23-4.43-3h8.78h0.01C13.39,18.78,11.69,20,9.75,20z');
        $doc->addChild($l0I2);
    }
}
