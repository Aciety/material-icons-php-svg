<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['navigation'],
    tags: ['app', 'application', 'arrow', 'chevron', 'components', 'direction', 'forward', 'interface', 'ios', 'navigation', 'next', 'right', 'screen', 'site', 'ui', 'ux', 'web', 'website'],
)]
final class ArrowForwardIosOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPolygon(points: [[6.23, 20.23], [8, 22], [18, 12], [8, 2], [6.23, 3.77], [14.46, 12]]);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
