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
    categories: ['device'],
    tags: ['disabled', 'enabled', 'flash', 'flashlight', 'light', 'off', 'on', 'slash'],
)]
final class FlashlightOnTwoToneIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M8,7.39l2,3V20h4v-9.6l2-3.01V7H8V7.39z M12,12.5c0.83,0,1.5,0.67,1.5,1.5s-0.67,1.5-1.5,1.5 s-1.5-0.67-1.5-1.5S11.17,12.5,12,12.5z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '8', y: '4', width: '8', height: '1');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M6,2v6l2,3v11h8V11l2-3V2H6z M16,7.39l-2,3.01V20h-4v-9.61l-2-3V7h8V7.39z M16,5H8V4h8V5z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGCircle(cx: '12', cy: '14', r: '1.5');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
