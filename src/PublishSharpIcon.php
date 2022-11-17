<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['arrow', 'cloud', 'file', 'import', 'publish', 'up', 'upload'],
)]
final class PublishSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M5 4v2h14V4H5zm0 10h4v6h6v-6h4l-7-7-7 7z');
        $doc->addChild($l0I0);
    }
}
