<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['navigation'],
    tags: ['app', 'application', 'arrow', 'back', 'chevron', 'components', 'direction', 'disable_ios', 'interface', 'ios', 'left', 'navigation', 'new', 'previous', 'screen', 'site', 'ui', 'ux', 'web', 'website'],
)]
final class ArrowBackIosNewTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPolygon(points: [[17.77, 3.77], [16, 2], [6, 12], [16, 22], [17.77, 20.23], [9.539999999999999, 12]]);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
