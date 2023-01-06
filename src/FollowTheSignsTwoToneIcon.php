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
final class FollowTheSignsTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M17.64,7.75V6h-3.51V4.5h3.51V2.75l2.49,2.5L17.64,7.75z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M9.12,5.25c1.1,0,2-0.9,2-2s-0.9-2-2-2s-2,0.9-2,2S8.02,5.25,9.12,5.25z M5.38,8.65l-2.75,14.1h2.1l1.75-8l2.15,2v6h2V15.2 l-2.05-2.05l0.6-3c1.3,1.6,3.25,2.6,5.45,2.6v-2c-1.85,0-3.45-1-4.35-2.45L9.32,6.7c-0.35-0.6-1-0.95-1.7-0.95 c-0.25,0-0.5,0.05-0.75,0.15L1.62,8.05v4.7h2V9.4L5.38,8.65 M12.62,1.75v7h3.75v14h1.5v-14h3.75v-7H12.62z M17.64,7.75V6h-3.51V4.5 h3.51V2.75l2.49,2.5L17.64,7.75z');
        $doc->addChild($l0I2);
    }
}
