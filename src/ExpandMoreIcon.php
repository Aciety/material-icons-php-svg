<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['navigation'],
    tags: ['arrow', 'arrows', 'chevron', 'collapse', 'direction', 'down', 'expand', 'expandable', 'list', 'more'],
)]
final class ExpandMoreIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z');
        $doc->addChild($l0I1);
    }
}
