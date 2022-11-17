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
    tags: ['angle', 'horizontal', 'image', 'panorama', 'photo', 'photography', 'photosphere', 'picture', 'select', 'wide'],
)]
final class PanoramaPhotosphereSelectRoundedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M21.95,8.15c-0.29-0.16-0.61-0.31-0.93-0.46C19.4,4.33,15.98,2,12,2C8.02,2,4.6,4.33,2.99,7.68 c-0.33,0.15-0.64,0.3-0.93,0.46C1.41,8.5,1,9.17,1,9.91v4.18c0,0.74,0.41,1.41,1.05,1.77c0.29,0.16,0.61,0.31,0.93,0.46 C4.6,19.67,8.02,22,12,22c3.98,0,7.4-2.33,9.01-5.68c0.33-0.15,0.64-0.3,0.93-0.46C22.59,15.5,23,14.83,23,14.09V9.91 C23,9.17,22.59,8.5,21.95,8.15z M12,4c2.37,0,4.49,1.04,5.95,2.68C16.17,6.25,14.15,6,12,6C9.85,6,7.83,6.25,6.05,6.68 C7.51,5.04,9.63,4,12,4z M12,20c-2.37,0-4.49-1.04-5.95-2.68C7.83,17.75,9.85,18,12,18s4.17-0.25,5.95-0.68 C16.49,18.96,14.37,20,12,20z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
