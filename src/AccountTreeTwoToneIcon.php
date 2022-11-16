<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolyline;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class AccountTreeTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M22,11V3h-7v3H9V3H2v8h7V8h2v10h4v3h7v-8h-7v3h-2V8h2v3H22z M7,9H4V5h3V9z M17,15h3v4h-3V15z M17,5h3v4h-3V5z');
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGPolyline(points: [[7, 5], [7, 9], [4, 9], [4, 5], [7, 5]]);
        $l1I1->setStyle('opacity', '.3');
        $l0I1->addChild($l1I1);
        $l1I2 = new SVGPolyline(points: [[20, 5], [20, 9], [17, 9], [17, 5], [20, 5]]);
        $l1I2->setStyle('opacity', '.3');
        $l0I1->addChild($l1I2);
        $l1I3 = new SVGPolyline(points: [[20, 15], [20, 19], [17, 19], [17, 15], [20, 15]]);
        $l1I3->setStyle('opacity', '.3');
        $l0I1->addChild($l1I3);
        $doc->addChild($l0I1);
    }
}
