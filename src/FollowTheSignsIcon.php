<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['social'],
    tags: ['arrow', 'body', 'directional', 'follow', 'human', 'people', 'person', 'right', 'signs', 'social', 'the'],
)]
final class FollowTheSignsIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M9.5,5.5c1.1,0,2-0.9,2-2s-0.9-2-2-2s-2,0.9-2,2S8.4,5.5,9.5,5.5z M5.75,8.9L3,23h2.1l1.75-8L9,17v6h2v-7.55L8.95,13.4 l0.6-3C10.85,12,12.8,13,15,13v-2c-1.85,0-3.45-1-4.35-2.45L9.7,6.95C9.35,6.35,8.7,6,8,6C7.75,6,7.5,6.05,7.25,6.15L2,8.3V13h2 V9.65L5.75,8.9 M13,2v7h3.75v14h1.5V9H22V2H13z M18.01,8V6.25H14.5v-1.5h3.51V3l2.49,2.5L18.01,8z');
        $doc->addChild($l0I1);
    }
}
