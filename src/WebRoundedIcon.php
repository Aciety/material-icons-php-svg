<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['av'],
    tags: ['browser', 'internet', 'page', 'screen', 'site', 'web', 'website', 'www'],
)]
final class WebRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zM4 9h10.5v3.5H4V9zm0 5.5h10.5V18H5c-.55 0-1-.45-1-1v-2.5zM19 18h-2.5V9H20v8c0 .55-.45 1-1 1z');
        $doc->addChild($l0I0);
    }
}
