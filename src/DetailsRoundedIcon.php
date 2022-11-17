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
    tags: ['details', 'edit', 'editing', 'enhance', 'image', 'photo', 'photography', 'sharpen', 'triangle'],
)]
final class DetailsRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M11.13,4.57l-8.3,14.94C2.46,20.18,2.94,21,3.7,21h16.6c0.76,0,1.24-0.82,0.87-1.49l-8.3-14.94 C12.49,3.89,11.51,3.89,11.13,4.57z M13,8.92L18.6,19H13V8.92z M11,8.92V19H5.4L11,8.92z');
        $doc->addChild($l0I1);
        $l0I2 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l1I0->addChild($l2I0);
        $l0I2->addChild($l1I0);
        $doc->addChild($l0I2);
    }
}
