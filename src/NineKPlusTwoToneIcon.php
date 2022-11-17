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
    categories: ['av'],
    tags: ['+', '9000', '9K', 'alphabet', 'character', 'digit', 'display', 'font', 'letter', 'number', 'pixel', 'pixels', 'plus', 'resolution', 'symbol', 'text', 'type', 'video'],
)]
final class NineKPlusTwoToneIcon extends SVG
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
        $l2I0 = new SVGRect(x: '7.5', y: '10', width: '1', height: '1.5');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M5,19h14v-6.5h-1.5V14h-1v-1.5H15v-1h1.5V10h1v1.5H19V5H5V19z M11,9h1.5v2.25L14.25,9H16l-2.25,3L16,15 h-1.75l-1.75-2.25V15H11V9z M6,13.5h2.5v-1H7c-0.55,0-1-0.45-1-1V10c0-0.55,0.45-1,1-1h2c0.55,0,1,0.45,1,1v4c0,0.55-0.45,1-1,1H6 V13.5z');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M10,14v-4c0-0.55-0.45-1-1-1H7c-0.55,0-1,0.45-1,1v1.5c0,0.55,0.45,1,1,1h1.5v1H6V15h3C9.55,15,10,14.55,10,14z M8.5,11.5 h-1V10h1V11.5z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,11.5h-1.5V10h-1v1.5H15v1h1.5 V14h1v-1.5H19V19H5V5h14V11.5z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPolygon(points: [[12.5, 12.75], [14.25, 15], [16, 15], [13.75, 12], [16, 9], [14.25, 9], [12.5, 11.25], [12.5, 9], [11, 9], [11, 15], [12.5, 15]]);
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
