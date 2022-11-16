<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class DisplaySettingsTwoToneIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M4,17h16V5H4V17z M18,13.75h-8v-1.5h8V13.75z M15,7h1.5v1.25H18v1.5h-1.5V11H15V7z M6,8.25h8v1.5H6V8.25z M6,12.25h1.5V11H9v4H7.5v-1.25H6V12.25z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M20,3H4C2.89,3,2,3.89,2,5v12c0,1.1,0.89,2,2,2h4v2h8v-2h4c1.1,0,2-0.9,2-2V5C22,3.89,21.1,3,20,3z M20,17H4V5h16V17z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '6', y: '8.25', width: '8', height: '1.5');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPolygon(points: [[16.5, 9.75], [18, 9.75], [18, 8.25], [16.5, 8.25], [16.5, 7], [15, 7], [15, 11], [16.5, 11]]);
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGRect(x: '10', y: '12.25', width: '8', height: '1.5');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPolygon(points: [[7.5, 15], [9, 15], [9, 11], [7.5, 11], [7.5, 12.25], [6, 12.25], [6, 13.75], [7.5, 13.75]]);
        $l1I0->addChild($l2I5);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
