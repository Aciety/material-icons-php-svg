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
    tags: ['(scan)', '[cellular', 'connection', 'data', 'detect', 'discover', 'find', 'internet', 'look', 'magnifying glass', 'mobile]', 'network', 'notice', 'search', 'service', 'signal', 'wifi', 'wireless'],
)]
final class WifiFindTwoToneIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M22.59,10.39L24,8.98C20.93,5.9,16.69,4,12,4C7.31,4,3.07,5.9,0,8.98L12,21l1.41-1.42L2.93,9.08C5.45,7.16,8.59,6,12,6 C16.13,6,19.88,7.68,22.59,10.39z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M23,18.59l-2.56-2.56C20.79,15.44,21,14.75,21,14c0-2.24-1.76-4-4-4s-4,1.76-4,4c0,2.24,1.76,4,4,4 c0.75,0,1.44-0.21,2.03-0.56L21.59,20L23,18.59z M15,14c0-1.12,0.88-2,2-2s2,0.88,2,2c0,1.12-0.88,2-2,2S15,15.12,15,14z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M22.59,10.39C19.88,7.68,16.13,6,12,6C8.59,6,5.45,7.16,2.93,9.08l2.26,2.26l8.24,8.24l0.46-0.46 C12.15,18.09,11,16.21,11,14c0-1.62,0.62-3.13,1.75-4.25S15.38,8,17,8c2.21,0,4.09,1.15,5.13,2.89l0.49-0.49l-0.02-0.02 L22.59,10.39z');
        $l2I2->setStyle('opacity', '.3');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
