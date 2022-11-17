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
    tags: ['angle', 'horizontal', 'image', 'panorama', 'photo', 'photography', 'picture', 'select', 'wide'],
)]
final class PanoramaHorizontalSelectSharpIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M12,5.5c-5.25,0-9.01-1.54-10-1.92L2,20.4c2.16-0.76,5.21-1.9,10-1.9c4.78,0,7.91,1.17,10,1.9L22,3.6 C19.91,4.33,16.77,5.5,12,5.5z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
