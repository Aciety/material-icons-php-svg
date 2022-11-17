<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['Android', 'OS', 'cell', 'device', 'edge', 'hardware', 'high', 'iOS', 'mobile', 'move', 'phone', 'sensitivity', 'sensor', 'tablet', 'vibrate'],
)]
final class EdgesensorHighTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGRect(x: '8', y: '4', width: '8', height: '1');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '8', y: '19', width: '8', height: '1');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M16,2.01L8,2C6.9,2,6,2.9,6,4v16c0,1.1,0.9,2,2,2h8c1.1,0,2-0.9,2-2V4C18,2.9,17.1,2.01,16,2.01z M16,20H8v-1h8V20z M16,17H8V7h8V17z M16,5H8V4h8V5z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '19', y: '10', width: '2', height: '7');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGRect(x: '22', y: '7', width: '2', height: '7');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGRect(x: '3', y: '7', width: '2', height: '7');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGRect(x: null, y: '10', width: '2', height: '7');
        $l1I0->addChild($l2I6);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
