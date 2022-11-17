<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['app', 'application', 'arrow', 'arrows', 'components', 'direction', 'forward', 'interface', 'navigation', 'right', 'screen', 'site', 'ui', 'ux', 'web', 'website'],
)]
final class ArrowOutwardSharpIcon extends SVG
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
        $l1I0 = new SVGPolygon(points: [[6, 6], [6, 8], [14.59, 8], [5, 17.59], [6.41, 19], [16, 9.41], [16, 18], [18, 18], [18, 6]]);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
