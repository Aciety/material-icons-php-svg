<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['analytics', 'area', 'chart', 'data', 'diagram', 'graph', 'infographic', 'measure', 'metrics', 'statistics', 'tracking'],
)]
final class AreaChartTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPolygon(points: [[19, 16.95], [12, 11.5], [8, 17], [5, 14.6], [5, 11], [7.44, 12.83], [12.4, 5.88], [16.3, 9], [19, 9]]);
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M17,7l-5-4l-5,7L3,7v13h18V7H17z M19,16.95l-7-5.45L8,17l-3-2.4V11l2.44,1.83l4.96-6.95L16.3,9H19V16.95z');
        $doc->addChild($l0I2);
    }
}
