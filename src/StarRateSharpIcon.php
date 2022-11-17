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
    tags: ['achievement', 'bookmark', 'favorite', 'highlight', 'important', 'marked', 'ranking', 'rate', 'rating rank', 'reward', 'save', 'saved', 'shape', 'special', 'star'],
)]
final class StarRateSharpIcon extends SVG
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
        $l1I1 = new SVGPolygon(points: [[14.43, 10], [12, 2], [9.57, 10], [2, 10], [8.18, 14.41], [5.83, 22], [12, 17.31], [18.18, 22], [15.83, 14.41], [22, 10]]);
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
