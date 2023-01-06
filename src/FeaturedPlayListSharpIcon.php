<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['av'],
    tags: ['collection', 'featured', 'highlighted', 'list', 'music', 'play', 'playlist', 'recommended'],
)]
final class FeaturedPlayListSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M23 3H1v18h22V3zm-11 8H3V9h9v2zm0-4H3V5h9v2z');
        $doc->addChild($l0I1);
    }
}
