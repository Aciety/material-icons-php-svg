<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['arrow', 'cloud', 'file', 'import', 'publish', 'up', 'upload'],
)]
final class PublishSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M5 4v2h14V4H5zm0 10h4v6h6v-6h4l-7-7-7 7z');
        $doc->addChild($l0I0);
    }
}
