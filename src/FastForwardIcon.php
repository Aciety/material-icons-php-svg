<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['av'],
    tags: ['control', 'fast', 'forward', 'media', 'music', 'play', 'speed', 'time', 'tv', 'video'],
)]
final class FastForwardIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M4 18l8.5-6L4 6v12zm9-12v12l8.5-6L13 6z');
        $doc->addChild($l0I1);
    }
}
