<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['alphabet', 'character', 'disabled', 'enabled', 'font', 'image', 'letter', 'off', 'on', 'original', 'photo', 'photography', 'raw', 'slash', 'symbol', 'text', 'type'],
)]
final class RawOnIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M6.5,9H3v6h1.5v-2h1.1l0.9,2H8l-0.9-2.1C7.6,12.6,8,12.1,8,11.5v-1C8,9.7,7.3,9,6.5,9z M6.5,11.5h-2v-1h2V11.5z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M10.25,9l-1.5,6h1.5l0.38-1.5h1.75l0.37,1.5h1.5l-1.5-6H10.25z M11,12l0.25-1h0.5L12,12H11z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[19.98, 9], [19.24, 12], [18.5, 9], [16.98, 9], [16.24, 12], [15.5, 9], [14, 9], [15.5, 15], [16.98, 15], [17.74, 11.96], [18.5, 15], [19.98, 15], [21.48, 9]]);
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
