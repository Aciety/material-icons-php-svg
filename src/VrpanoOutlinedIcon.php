<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['image'],
    tags: ['angle', 'image', 'landscape', 'mountain', 'mountains', 'panorama', 'photo', 'photography', 'picture', 'view', 'vrpano', 'wide'],
)]
final class VrpanoOutlinedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M21.01,4C20.45,4,17.4,5.5,12,5.5c-5.31,0-8.49-1.49-9.01-1.49C2.46,4.01,2,4.45,2,5.02V19c0,0.57,0.46,1,0.99,1 c0.57,0,3.55-1.5,9.01-1.5c5.42,0,8.44,1.5,9.01,1.5c0.53,0,0.99-0.43,0.99-1V5C22,4.43,21.54,4,21.01,4z M20,17.63 c-2.01-0.59-4.62-1.13-8-1.13c-3.39,0-5.99,0.54-8,1.13V6.38C6.58,7.11,9.32,7.5,12,7.5c3.38,0,5.99-0.54,8-1.13V17.63z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M9.17,10.99l-3.69,4.42C7.48,15.15,9.66,15,12,15c2.3,0,4.52,0.15,6.51,0.4L14,10l-2.83,3.39L9.17,10.99z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
