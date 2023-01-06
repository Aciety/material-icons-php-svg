<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['action'],
    tags: ['badge', 'hexagon', 'mark', 'shield', 'sign', 'symbol'],
)]
final class TokenTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: '0', width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12,4.29l5.91,3.28L14.9,9.24C14.17,8.48,13.14,8,12,8S9.83,8.48,9.1,9.24L6.09,7.57L12,4.29z M11,19.16 l-6-3.33V9.26l3.13,1.74C8.04,11.31,8,11.65,8,12c0,1.86,1.27,3.43,3,3.87V19.16z M10,12c0-1.1,0.9-2,2-2s2,0.9,2,2s-0.9,2-2,2 S10,13.1,10,12z M13,19.16v-3.28c1.73-0.44,3-2.01,3-3.87c0-0.35-0.04-0.69-0.13-1.01L19,9.26l0,6.57L13,19.16z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M21,7l-9-5L3,7v10l9,5l9-5L21,7z M12,4.29l5.91,3.28L14.9,9.24C14.17,8.48,13.14,8,12,8S9.83,8.48,9.1,9.24L6.09,7.57 L12,4.29z M11,19.16l-6-3.33V9.26l3.13,1.74C8.04,11.31,8,11.65,8,12c0,1.86,1.27,3.43,3,3.87V19.16z M10,12c0-1.1,0.9-2,2-2 s2,0.9,2,2s-0.9,2-2,2S10,13.1,10,12z M13,19.16v-3.28c1.73-0.44,3-2.01,3-3.87c0-0.35-0.04-0.69-0.13-1.01L19,9.26l0,6.57L13,19.16 z');
        $doc->addChild($l0I2);
    }
}
