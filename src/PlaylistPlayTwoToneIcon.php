<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['av'],
    tags: ['arrow', 'collection', 'list', 'music', 'play', 'playlist'],
)]
final class PlaylistPlayTwoToneIcon extends SvgIcon
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
        $l2I0 = new SVGRect(x: '3', y: '10', width: '11', height: '2');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '3', y: '6', width: '11', height: '2');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '3', y: '14', width: '7', height: '2');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPolygon(points: [[16, 13], [16, 21], [22, 17]]);
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
