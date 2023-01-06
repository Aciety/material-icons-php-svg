<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['image'],
    tags: ['details', 'edit', 'editing', 'enhance', 'image', 'photo', 'photography', 'sharpen', 'triangle'],
)]
final class DetailsSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12,3L2,21h20L12,3z M13,8.92L18.6,19H13V8.92z M11,8.92V19H5.4L11,8.92z');
        $doc->addChild($l0I1);
    }
}
