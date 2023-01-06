<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['[offline]', 'disabled', 'dislike', 'down', 'enabled', 'favorite', 'filled', 'fingers', 'gesture', 'hand', 'hands', 'like', 'off', 'on', 'rank', 'ranking', 'rate', 'rating', 'slash', 'thumb'],
)]
final class ThumbDownOffAltRoundedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M14.99,3H6C5.2,3,4.48,3.48,4.17,4.21l-3.26,7.61C0.06,13.8,1.51,16,3.66,16h5.65l-0.95,4.58 c-0.1,0.5,0.05,1.01,0.41,1.37c0.29,0.29,0.67,0.43,1.05,0.43c0.38,0,0.77-0.15,1.06-0.44l5.53-5.54 c0.37-0.37,0.58-0.88,0.58-1.41V5C16.99,3.9,16.09,3,14.99,3z M10.66,19.33l0.61-2.92l0.5-2.41H9.31H3.66 c-0.47,0-0.72-0.28-0.83-0.45c-0.11-0.17-0.27-0.51-0.08-0.95L6,5h8.99l0,9.99L10.66,19.33z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M21,3c-1.1,0-2,0.9-2,2v8c0,1.1,0.9,2,2,2s2-0.9,2-2V5C23,3.9,22.1,3,21,3z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
