<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['image'],
    tags: ['16', 'camera', 'digits', 'font', 'image', 'letters', 'megapixel', 'megapixels', 'mp', 'numbers', 'pixel', 'pixels', 'quality', 'resolution', 'symbol', 'text', 'type'],
)]
final class SixteenMpSharpIcon extends SvgIcon
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
        $l2I1 = new SVGPath(d: 'M3,3v18h18V3H3z M12,5.5h4.5V7h-3v1h3v3.5H12V5.5z M7,5.5h3v6H8.5V7H7V5.5z M12.5,18.5H11V14h-1v3H8.5v-3h-1v4.5H6v-6h6.5 V18.5z M18,17h-3v1.5h-1.5v-6H18V17z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '13.5', y: '9', width: '1.5', height: '1.5');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
