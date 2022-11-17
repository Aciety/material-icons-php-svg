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
    tags: ['90', 'arrow', 'arrows', 'ccw', 'degrees', 'direction', 'edit', 'editing', 'image', 'photo', 'rotate', 'turn'],
)]
final class Rotate90DegreesCwOutlinedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M2,13c0,4.97,4.03,9,9,9c1.76,0,3.4-0.51,4.79-1.38l-1.46-1.46C13.34,19.69,12.2,20,11,20c-3.86,0-7-3.14-7-7s3.14-7,7-7 h0.17L9.59,7.59L11,9l4-4l-4-4L9.58,2.41L11.17,4H11C6.03,4,2,8.03,2,13z M11,13l6,6l6-6l-6-6L11,13z M17,16.17L13.83,13L17,9.83 L20.17,13L17,16.17z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
