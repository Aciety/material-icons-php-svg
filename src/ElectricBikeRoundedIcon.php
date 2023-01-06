<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['bike', 'electric', 'electricity', 'maps', 'scooter', 'transportation', 'travel', 'vespa'],
)]
final class ElectricBikeRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M19,7h-0.82l-1.7-4.68C16.19,1.53,15.44,1,14.6,1H13c-0.55,0-1,0.45-1,1c0,0.55,0.45,1,1,1h1.6l1.46,4h-4.81l-0.36-1h0.09 c0.55,0,1-0.45,1-1c0-0.55-0.45-1-1-1H8C7.45,4,7,4.45,7,5c0,0.55,0.45,1,1,1h0.75l1.82,5H9.9C9.46,8.77,7.59,7.12,5.25,7.01 C2.45,6.87,0,9.2,0,12c0,2.8,2.2,5,5,5c2.46,0,4.45-1.69,4.9-4h4.2c0.44,2.23,2.31,3.88,4.65,3.99c2.8,0.13,5.25-2.19,5.25-5 C24,9.2,21.8,7,19,7z M6,13h1.82c-0.42,1.23-1.6,2.08-3.02,1.99C3.31,14.9,2.07,13.64,2,12.14C1.93,10.39,3.27,9,5,9 c1.33,0,2.42,0.83,2.82,2H6c-0.55,0-1,0.45-1,1C5,12.55,5.45,13,6,13z M14.1,11h-1.4l-0.73-2H15C14.56,9.58,14.24,10.25,14.1,11z M18.88,15c-1.54-0.06-2.84-1.37-2.88-2.92c-0.02-0.96,0.39-1.8,1.05-2.36l0.62,1.7c0.19,0.52,0.76,0.79,1.28,0.6 c0.52-0.19,0.79-0.76,0.6-1.28l-0.63-1.73c0,0,0,0,0.01-0.01C20.64,8.96,22,10.29,22,12C22,13.72,20.62,15.06,18.88,15z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[11, 20], [7, 20], [13, 23], [13, 21], [17, 21], [11, 18]]);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
