<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['notification'],
    tags: ['art', 'image', 'imagesearch', 'paint', 'roller', 'search'],
)]
final class ImagesearchRollerIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20 2v6H6V6H4v4h10v5h2v8h-6v-8h2v-3H2V4h4V2');
        $doc->addChild($l0I1);
    }
}
