<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Texts\SVGTitle;

#[MaterialIcon(
    categories: ['social'],
    tags: ['approved', 'circle', 'confirm', 'favorite', 'gesture', 'hand', 'like', 'reaction', 'recommend', 'social', 'support', 'thumbs', 'up', 'well'],
)]
final class RecommendIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGTitle(text: 'ic_recommend_24px');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm6 9.8a.9.9 0 0 1-.1.5l-2.1 4.9a1.34 1.34 0 0 1-1.3.8H9a2 2 0 0 1-2-2v-5a1.28 1.28 0 0 1 .4-1L12 5l.69.69a1.08 1.08 0 0 1 .3.7v.2L12.41 10H17a1 1 0 0 1 1 1z');
        $doc->addChild($l0I2);
    }
}
