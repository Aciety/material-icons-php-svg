<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['angle', 'image', 'panorama', 'photo', 'photography', 'picture', 'select', 'vertical', 'wide'],
)]
final class PanoramaVerticalSelectOutlinedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M18.5,12c0-3.89,0.84-6.95,1.43-8.69C20.15,2.67,19.67,2,18.98,2L5,2C4.32,2,3.84,2.66,4.05,3.31C4.74,5.36,5.5,8.1,5.5,12 c0,3.87-0.76,6.66-1.45,8.69C3.84,21.34,4.32,22,5,22h14c0.68,0,1.17-0.66,0.95-1.31C19.27,18.66,18.5,15.86,18.5,12z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
