<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['automobile', 'bluetooth', 'car', 'cars', 'cast', 'connect', 'connection', 'device', 'drive', 'maps', 'paring', 'streaming', 'symbol', 'transportation', 'travel', 'vehicle', 'wireless'],
)]
final class BluetoothDriveTwoToneIcon extends SVG
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
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M4,17h14v-5h-1H4V17z M15.5,13c0.83,0,1.5,0.67,1.5,1.5S16.33,16,15.5,16S14,15.33,14,14.5 S14.67,13,15.5,13z M6.5,13C7.33,13,8,13.67,8,14.5S7.33,16,6.5,16S5,15.33,5,14.5S5.67,13,6.5,13z');
        $l3I0->setStyle('opacity', '.3');
        $l2I0->addChild($l3I0);
        $l3I1 = new SVGPath(d: 'M18,17H4v-5h13c-1.1,0-2-0.9-2-2H4.81l1.04-3H15V5H5.5C4.84,5,4.29,5.42,4.08,6.01L2,12v8c0,0.55,0.45,1,1,1h1 c0.55,0,1-0.45,1-1v-1h12v1c0,0.55,0.45,1,1,1h1c0.55,0,1-0.45,1-1v-8h-2V17z');
        $l2I0->addChild($l3I1);
        $l3I2 = new SVGCircle(cx: '6.5', cy: '14.5', r: '1.5');
        $l2I0->addChild($l3I2);
        $l3I3 = new SVGCircle(cx: '15.5', cy: '14.5', r: '1.5');
        $l2I0->addChild($l3I3);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M22,3.85L19.15,1h-0.5v3.79l-2.3-2.29l-0.7,0.7L18.44,6l-2.79,2.79l0.7,0.71l2.3-2.3V11h0.5L22,8.14L19.85,6L22,3.85z M19.65,2.91l0.94,0.94l-0.94,0.94V2.91z M20.59,8.14l-0.94,0.94V7.2L20.59,8.14z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
