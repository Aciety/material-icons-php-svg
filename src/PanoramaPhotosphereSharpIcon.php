<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['image'],
    tags: ['angle', 'horizontal', 'image', 'panorama', 'photo', 'photography', 'photosphere', 'picture', 'wide'],
)]
final class PanoramaPhotosphereSharpIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M23,8.84c-0.54-0.43-1.23-0.81-1.99-1.15C19.4,4.33,15.98,2,12,2C8.02,2,4.6,4.33,2.99,7.68C2.23,8.03,1.54,8.4,1,8.84 v6.33c0.54,0.43,1.23,0.81,1.99,1.15C4.6,19.67,8.02,22,12,22c3.98,0,7.4-2.33,9.01-5.68c0.76-0.34,1.45-0.72,1.99-1.15V8.84z M12,4c2.37,0,4.49,1.04,5.95,2.68C16.17,6.25,14.15,6,12,6C9.85,6,7.83,6.25,6.05,6.68C7.51,5.04,9.63,4,12,4z M12,20 c-2.37,0-4.49-1.04-5.95-2.68C7.83,17.75,9.85,18,12,18s4.17-0.25,5.95-0.68C16.49,18.96,14.37,20,12,20z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
