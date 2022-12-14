<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['social'],
    tags: ['abstract', 'body', 'club', 'collaboration', 'crowd', 'gathering', 'groups', 'human', 'meeting', 'people', 'person', 'social', 'teams'],
)]
final class Groups3SharpIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M16.24,13.65c-1.17-0.52-2.61-0.9-4.24-0.9c-1.63,0-3.07,0.39-4.24,0.9C6.68,14.13,6,15.21,6,16.39V18h12v-1.61 C18,15.21,17.32,14.13,16.24,13.65z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M1.22,14.58C0.48,14.9,0,15.62,0,16.43V18l4.5,0v-1.61c0-0.83,0.23-1.61,0.63-2.29C4.76,14.04,4.39,14,4,14 C3.01,14,2.07,14.21,1.22,14.58z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M22.78,14.58C21.93,14.21,20.99,14,20,14c-0.39,0-0.76,0.04-1.13,0.1c0.4,0.68,0.63,1.46,0.63,2.29V18l4.5,0v-1.57 C24,15.62,23.52,14.9,22.78,14.58z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M12,12c1.66,0,3-1.34,3-3c0-1.66-1.34-3-3-3S9,7.34,9,9C9,10.66,10.34,12,12,12z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGRect(x: '2.23', y: '9.23', width: '3.54', height: '3.54');
        $l2I4->setAttribute('transform', 'matrix(0.7071 -0.7071 0.7071 0.7071 -6.6066 6.0503)');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPolygon(points: [[20, 9], [17.5, 13], [22.5, 13]]);
        $l1I0->addChild($l2I5);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
