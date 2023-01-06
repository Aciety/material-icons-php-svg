<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['alert'],
    tags: ['!', 'alert', 'amber', 'attention', 'caution', 'danger', 'error', 'exclamation', 'important', 'mark', 'notification', 'symbol', 'triangle', 'warning'],
)]
final class WarningAmberIcon extends SvgIcon
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
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M12,5.99L19.53,19H4.47L12,5.99 M12,2L1,21h22L12,2L12,2z');
        $l2I0->addChild($l3I0);
        $l3I1 = new SVGPolygon(points: [[13, 16], [11, 16], [11, 18], [13, 18]]);
        $l2I0->addChild($l3I1);
        $l3I2 = new SVGPolygon(points: [[13, 10], [11, 10], [11, 15], [13, 15]]);
        $l2I0->addChild($l3I2);
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
