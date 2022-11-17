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
    tags: ['+', 'bottle', 'doctor', 'drug', 'health', 'hospital', 'liquid', 'medications', 'medicine', 'pharmacy', 'spoon', 'vessel'],
)]
final class MedicationLiquidRoundedIcon extends SVG
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
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M4,5h10c0.55,0,1-0.45,1-1s-0.45-1-1-1H4C3.45,3,3,3.45,3,4S3.45,5,4,5z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M14,6H4C2.9,6,2,6.9,2,8v11c0,1.1,0.9,2,2,2h10c1.1,0,2-0.9,2-2V8C16,6.9,15.1,6,14,6z M11.5,15h-1v1 c0,0.83-0.67,1.5-1.5,1.5S7.5,16.83,7.5,16v-1h-1C5.67,15,5,14.33,5,13.5C5,12.67,5.67,12,6.5,12h1v-1c0-0.83,0.67-1.5,1.5-1.5 s1.5,0.67,1.5,1.5v1h1c0.83,0,1.5,0.67,1.5,1.5C13,14.33,12.33,15,11.5,15z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M20,6c-1.68,0-3,1.76-3,4c0,1.77,0.83,3.22,2,3.76V20c0,0.55,0.45,1,1,1s1-0.45,1-1v-6.24c1.17-0.54,2-1.99,2-3.76 C23,7.76,21.68,6,20,6z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
