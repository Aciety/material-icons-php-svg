<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['asterisk', 'clinic', 'emergency', 'health', 'hospital', 'maps', 'medical', 'symbol'],
)]
final class EmergencyIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPolygon(points: [[20.79, 9.23], [18.79, 5.77], [14, 8.539999999999999], [14, 3], [10, 3], [10, 8.539999999999999], [5.21, 5.77], [3.21, 9.23], [8, 12], [3.21, 14.77], [5.21, 18.23], [10, 15.46], [10, 21], [14, 21], [14, 15.46], [18.79, 18.23], [20.79, 14.77], [16, 12]]);
        $doc->addChild($l0I1);
    }
}
