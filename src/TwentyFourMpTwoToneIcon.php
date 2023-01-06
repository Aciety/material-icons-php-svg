<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['image'],
    tags: ['24', 'camera', 'digits', 'font', 'image', 'letters', 'megapixel', 'megapixels', 'mp', 'numbers', 'pixel', 'pixels', 'quality', 'resolution', 'symbol', 'text', 'type'],
)]
final class TwentyFourMpTwoToneIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M5,19h14V5H5V19z M18,16c0,0.55-0.45,1-1,1h-2v1.5h-1.5v-6H17c0.55,0,1,0.45,1,1V16z M13,5.5h1.5v3H16v-3 h1.5v3h1V10h-1v1.5H16V10h-3V5.5z M6.5,9c0-0.55,0.45-1,1-1h2V7h-3V5.5H10c0.55,0,1,0.45,1,1V8c0,0.55-0.45,1-1,1H8v1h3v1.5H6.5V9 z M6,13.5c0-0.55,0.45-1,1-1h4.5c0.55,0,1,0.45,1,1v5H11V14h-1v3H8.5v-3h-1v4.5H6V13.5z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '15', y: '14', width: '1.5', height: '1.5');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M7.5,14h1v3H10v-3h1v4.5h1.5v-5c0-0.55-0.45-1-1-1H7c-0.55,0-1,0.45-1,1v5h1.5V14z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M17,12.5h-3.5v6H15V17h2c0.55,0,1-0.45,1-1v-2.5C18,12.95,17.55,12.5,17,12.5z M16.5,15.5H15V14h1.5V15.5z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M11,10H8V9h2c0.55,0,1-0.45,1-1V6.5c0-0.55-0.45-1-1-1H6.5V7h3v1h-2c-0.55,0-1,0.45-1,1v2.5H11V10z');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGPolygon(points: [[16, 11.5], [17.5, 11.5], [17.5, 10], [18.5, 10], [18.5, 8.5], [17.5, 8.5], [17.5, 5.5], [16, 5.5], [16, 8.5], [14.5, 8.5], [14.5, 5.5], [13, 5.5], [13, 10], [16, 10]]);
        $l1I0->addChild($l2I6);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
