<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['align', 'alignment', 'center', 'format', 'layout', 'lines', 'paragraph', 'rule', 'rules', 'style', 'text', 'vertical'],
)]
final class AlignVerticalCenterTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPolygon(points: [[22, 11], [17, 11], [17, 6], [14, 6], [14, 11], [10, 11], [10, 3], [7, 3], [7, 11], [1.84, 11], [1.84, 13], [7, 13], [7, 21], [10, 21], [10, 13], [14, 13], [14, 18], [17, 18], [17, 13], [22, 13]]);
        $doc->addChild($l0I1);
    }
}
