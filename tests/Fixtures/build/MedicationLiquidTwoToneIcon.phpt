<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGEllipse;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGClipPath;
use SVG\Nodes\Structures\SVGDefs;
use SVG\Nodes\Structures\SVGGroup;
use SVG\Nodes\Structures\SVGUse;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['+', 'bottle', 'doctor', 'drug', 'health', 'hospital', 'liquid', 'medications', 'medicine', 'pharmacy', 'spoon', 'vessel'],
)]
final class MedicationLiquidTwoToneIcon extends SVG
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
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGGroup();
        $l4I0 = new SVGDefs();
        $l5I0 = new SVGRect(x: '4', y: '8', width: '10', height: '11');
        $l5I0->setAttribute('id', 'SVGID_1_');
        $l5I0->setStyle('opacity', '.3');
        $l4I0->addChild($l5I0);
        $l3I0->addChild($l4I0);
        $l4I1 = new SVGUse();
        $l4I1->setAttribute('xlink:href', '#SVGID_1_');
        $l4I1->setStyle('overflow', 'visible');
        $l3I0->addChild($l4I1);
        $l4I2 = new SVGClipPath(id: 'SVGID_2_');
        $l5I0 = new SVGUse();
        $l5I0->setAttribute('xlink:href', '#SVGID_1_');
        $l5I0->setStyle('overflow', 'visible');
        $l4I2->addChild($l5I0);
        $l3I0->addChild($l4I2);
        $l4I3 = new SVGPath(d: 'M4,19h10V8H4V19z M5,12h2.5V9.5h3V12H13v3h-2.5v2.5h-3V15H5V12z');
        $l4I3->setStyle('clip-path', 'url(#SVGID_2_)');
        $l3I0->addChild($l4I3);
        $l3I0->setStyle('opacity', '.3');
        $l2I0->addChild($l3I0);
        $l3I1 = new SVGRect(x: '3', y: '3', width: '12', height: '2');
        $l2I0->addChild($l3I1);
        $l3I2 = new SVGPath(d: 'M14,6H4C2.9,6,2,6.9,2,8v11c0,1.1,0.9,2,2,2h10c1.1,0,2-0.9,2-2V8C16,6.9,15.1,6,14,6 M14,19H4V8h10V19z');
        $l2I0->addChild($l3I2);
        $l3I3 = new SVGPolygon(points: [[7.5, 17.5], [10.5, 17.5], [10.5, 15], [13, 15], [13, 12], [10.5, 12], [10.5, 9.5], [7.5, 9.5], [7.5, 12], [5, 12], [5, 15], [7.5, 15]]);
        $l2I0->addChild($l3I3);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGEllipse(cx: '20', cy: '10', rx: '1', ry: '2');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M20,6c-1.68,0-3,1.76-3,4c0,1.77,0.83,3.22,2,3.76V20c0,0.55,0.45,1,1,1s1-0.45,1-1v-6.24c1.17-0.54,2-1.99,2-3.76 C23,7.76,21.68,6,20,6z M20,12c-0.41,0-1-0.78-1-2s0.59-2,1-2s1,0.78,1,2S20.41,12,20,12z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
