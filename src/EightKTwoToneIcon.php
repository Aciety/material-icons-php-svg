<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['av'],
    tags: ['8000', '8K', 'alphabet', 'character', 'digit', 'display', 'font', 'letter', 'number', 'pixel', 'pixels', 'resolution', 'symbol', 'text', 'type', 'video'],
)]
final class EightKTwoToneIcon extends SvgIcon
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
        $l2I0 = new SVGRect(x: '8', y: '10', width: '1.5', height: '1.5');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '8', y: '12.5', width: '1.5', height: '1.5');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M5,19h14V5H5V19z M13,9h1.5v2.25L16.25,9H18l-2.25,3L18,15h-1.75l-1.75-2.25V15H13V9z M6.5,10 c0-0.55,0.45-1,1-1H10c0.55,0,1,0.45,1,1v4c0,0.55-0.45,1-1,1H7.5c-0.55,0-1-0.45-1-1V10z');
        $l2I2->setStyle('opacity', '.3');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M7.5,15H10c0.55,0,1-0.45,1-1v-4c0-0.55-0.45-1-1-1H7.5c-0.55,0-1,0.45-1,1v4C6.5,14.55,6.95,15,7.5,15z M8,10h1.5v1.5H8 V10z M8,12.5h1.5V14H8V12.5z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPolygon(points: [[14.5, 12.75], [16.25, 15], [18, 15], [15.75, 12], [18, 9], [16.25, 9], [14.5, 11.25], [14.5, 9], [13, 9], [13, 15], [14.5, 15]]);
        $l1I0->addChild($l2I5);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
