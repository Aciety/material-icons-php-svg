<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['Android', 'OS', 'cell', 'device', 'fold', 'foldable', 'hardware', 'iOS', 'mobile', 'phone', 'tablet'],
)]
final class DevicesFoldOutlinedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M20,3h-3c0-1.44-1.47-2.4-2.79-1.84l-3,1.29C10.48,2.76,10,3.49,10,4.29V19c0,1.1,0.9,2,2,2h8c1.1,0,2-0.9,2-2V5 C22,3.9,21.1,3,20,3z M15,16.68l-3,1.29V4.29L15,3V16.68z M20,19h-5.33l1.12-0.48C16.52,18.2,17,17.48,17,16.68V5h3V19z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGGroup();
        $l3I0 = new SVGRect(x: '2', y: '3', width: '2', height: '2');
        $l2I1->addChild($l3I0);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGGroup();
        $l3I0 = new SVGRect(x: '2', y: '19', width: '2', height: '2');
        $l2I2->addChild($l3I0);
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGGroup();
        $l3I0 = new SVGRect(x: '2', y: '15', width: '2', height: '2');
        $l2I3->addChild($l3I0);
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGGroup();
        $l3I0 = new SVGRect(x: '2', y: '11', width: '2', height: '2');
        $l2I4->addChild($l3I0);
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGGroup();
        $l3I0 = new SVGRect(x: '2', y: '7', width: '2', height: '2');
        $l2I5->addChild($l3I0);
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGGroup();
        $l3I0 = new SVGRect(x: '6', y: '3', width: '2', height: '2');
        $l2I6->addChild($l3I0);
        $l1I0->addChild($l2I6);
        $l2I7 = new SVGGroup();
        $l3I0 = new SVGRect(x: '6', y: '19', width: '2', height: '2');
        $l2I7->addChild($l3I0);
        $l1I0->addChild($l2I7);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
