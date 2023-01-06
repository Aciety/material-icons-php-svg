<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['alt', 'edit', 'filter', 'funnel', 'options', 'refine', 'sift'],
)]
final class FilterAltSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24 M24,24H0');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M3,4c2.01,2.59,7,9,7,9v7h4v-7c0,0,4.98-6.41,7-9H3z');
        $l0I0->addChild($l1I1);
        $l1I2 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I2->setStyle('fill', 'none');
        $l0I0->addChild($l1I2);
        $doc->addChild($l0I0);
    }
}
