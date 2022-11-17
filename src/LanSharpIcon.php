<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['computer', 'connection', 'data', 'internet', 'lan', 'network', 'service'],
)]
final class LanSharpIcon extends SVG
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
        $l1I0 = new SVGPolygon(points: [[13, 22], [21, 22], [21, 15], [18, 15], [18, 11], [13, 11], [13, 9], [16, 9], [16, 2], [8, 2], [8, 9], [11, 9], [11, 11], [6, 11], [6, 15], [3, 15], [3, 22], [11, 22], [11, 15], [8, 15], [8, 13], [16, 13], [16, 15], [13, 15]]);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
