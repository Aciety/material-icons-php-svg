<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['image'],
    tags: ['color', 'edit', 'editing', 'effect', 'filter', 'gradient', 'image', 'images', 'photography', 'picture', 'pictures'],
)]
final class GradientSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M11 9h2v2h-2V9zm-2 2h2v2H9v-2zm4 0h2v2h-2v-2zm2-2h2v2h-2V9zM7 9h2v2H7V9zm14-6H3v18h18V3zM9 18H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2zm2-7h-2v2h2v2h-2v-2h-2v2h-2v-2h-2v2H9v-2H7v2H5v-2h2v-2H5V5h14v6z');
        $doc->addChild($l0I1);
    }
}
