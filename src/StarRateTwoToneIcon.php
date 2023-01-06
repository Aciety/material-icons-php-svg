<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['achievement', 'bookmark', 'favorite', 'highlight', 'important', 'marked', 'ranking', 'rate', 'rating rank', 'reward', 'save', 'saved', 'shape', 'special', 'star'],
)]
final class StarRateTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPolygon(points: [[12.94, 12], [12, 8.890000000000001], [11.06, 12], [8.24, 12], [10.51, 13.62], [9.58, 16.63], [12, 14.79], [14.42, 16.63], [13.49, 13.62], [15.76, 12]]);
        $l1I1->setStyle('enable-background', 'new');
        $l1I1->setStyle('opacity', '.3');
        $l0I0->addChild($l1I1);
        $l1I2 = new SVGPath(d: 'M22,10h-7.58L12,2l-2.42,8H2l6.17,4.41L5.83,22L12,17.31L18.17,22l-2.35-7.59L22,10z M14.42,16.63L12,14.79l-2.42,1.84 l0.93-3.01L8.24,12h2.82L12,8.89L12.94,12h2.82l-2.27,1.62L14.42,16.63z');
        $l0I0->addChild($l1I2);
        $doc->addChild($l0I0);
    }
}
