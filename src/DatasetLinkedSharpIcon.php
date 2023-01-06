<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: [],
)]
final class DatasetLinkedSharpIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M8.09,17H7v-4h3.69c0.95-0.63,2.09-1,3.31-1h6c0.34,0,0.67,0.04,1,0.09V3H3v18h5.81C8.3,20.12,8,19.09,8,18 C8,17.66,8.04,17.33,8.09,17z M13,7h4v4h-4V7z M7,7h4v4H7V7z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M12,18c0-1.1,0.9-2,2-2h2v-2h-2c-2.21,0-4,1.79-4,4c0,2.21,1.79,4,4,4h2v-2h-2C12.9,20,12,19.1,12,18z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M20,14h-2v2h2c1.1,0,2,0.9,2,2s-0.9,2-2,2h-2v2h2c2.21,0,4-1.79,4-4C24,15.79,22.21,14,20,14z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '14', y: '17', width: '6', height: '2');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
