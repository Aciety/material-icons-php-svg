<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['image'],
    tags: ['18', 'camera', 'digits', 'font', 'image', 'letters', 'megapixel', 'megapixels', 'mp', 'numbers', 'pixel', 'pixels', 'quality', 'resolution', 'symbol', 'text', 'type'],
)]
final class EighteenMpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 15.5h-1.5V14h-1v3H8v-3H7v4.5H5.5v-5c0-.55.45-1 1-1H11c.55 0 1 .45 1 1v5zm3.5 0H14v-6h3.5c.55 0 1 .45 1 1V16c0 .55-.45 1-1 1h-2v1.5zM10 5.5v6H8.5V7H7V5.5h3zm6.5 5c0 .55-.45 1-1 1H13c-.55 0-1-.45-1-1v-4c0-.55.45-1 1-1h2.5c.55 0 1 .45 1 1v4zm-3 0H15V9h-1.5v1.5zm0-2.5H15V6.5h-1.5V8zm2 6H17v1.5h-1.5z');
        $doc->addChild($l0I1);
    }
}
