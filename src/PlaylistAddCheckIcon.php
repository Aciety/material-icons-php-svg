<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class PlaylistAddCheckIcon extends SVG
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
        $l2I0 = new SVGRect(x: '3', y: '10', width: '11', height: '2');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '3', y: '6', width: '11', height: '2');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '3', y: '14', width: '7', height: '2');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPolygon(points: [[20.59, 11.93], [16.34, 16.17], [14.22, 14.05], [12.81, 15.46], [16.34, 19], [22, 13.34]]);
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
