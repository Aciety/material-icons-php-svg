<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['image'],
    tags: ['24', 'camera', 'digits', 'font', 'image', 'letters', 'megapixel', 'megapixels', 'mp', 'numbers', 'pixel', 'pixels', 'quality', 'resolution', 'symbol', 'text', 'type'],
)]
final class TwentyFourMpSharpIcon extends SvgIcon
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
        $l2I0 = new SVGRect(x: '15', y: '14', width: '1.5', height: '1.5');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M3,3v18h18V3H3z M6.5,8h3V7h-3V5.5H11V9H8v1h3v1.5H6.5V8z M12.5,18.5H11V14h-1v3H8.5v-3h-1v4.5H6v-6h6.5V18.5z M18,17h-3 v1.5h-1.5v-6H18V17z M18.5,10h-1v1.5H16V10h-3V5.5h1.5v3H16v-3h1.5v3h1V10z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
