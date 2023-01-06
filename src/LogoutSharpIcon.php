<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['app', 'application', 'arrow', 'components', 'design', 'exit', 'interface', 'leave', 'log', 'login', 'logout', 'right', 'screen', 'site', 'ui', 'ux', 'web', 'website'],
)]
final class LogoutSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPolygon(points: [[5, 5], [12, 5], [12, 3], [3, 3], [3, 21], [12, 21], [12, 19], [5, 19]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[21, 12], [17, 8], [17, 11], [9, 11], [9, 13], [17, 13], [17, 16]]);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
