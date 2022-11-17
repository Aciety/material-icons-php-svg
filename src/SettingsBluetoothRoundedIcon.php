<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['bluetooth', 'connect', 'connection', 'connectivity', 'device', 'settings', 'signal', 'symbol'],
)]
final class SettingsBluetoothRoundedIcon extends SVG
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
        $l2I0 = new SVGCircle(cx: '12', cy: '23', r: '1');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '8', cy: '23', r: '1');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGCircle(cx: '16', cy: '23', r: '1');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M13.41,10L17,6.42c0.39-0.39,0.39-1.02,0-1.42l-4.79-4.79C12.07,0.07,11.89,0,11.71,0C11.32,0,11,0.32,11,0.71v6.88 L7.11,3.71c-0.39-0.39-1.02-0.39-1.41,0c-0.39,0.39-0.39,1.02,0,1.41L10.59,10l-4.89,4.89c-0.39,0.39-0.39,1.02,0,1.41 c0.39,0.39,1.02,0.39,1.41,0L11,12.41v6.88c0,0.39,0.32,0.71,0.71,0.71c0.19,0,0.37-0.07,0.5-0.21L17,15 c0.39-0.39,0.39-1.02,0-1.42L13.41,10z M13,3.83l1.88,1.88L13,7.59V3.83z M13,16.17v-3.76l1.88,1.88L13,16.17z');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
