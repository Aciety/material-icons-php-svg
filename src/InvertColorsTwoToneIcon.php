<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['colors', 'drop', 'droplet', 'edit', 'editing', 'hue', 'invert', 'inverted', 'palette', 'tone', 'water'],
)]
final class InvertColorsTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M7.75,8.99C6.62,10.1,6,11.57,6,13.13C6,16.37,8.69,19,12,19l0-14.19L7.75,8.99z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M17.65,7.56L17.65,7.56L12,2L6.35,7.56l0,0C4.9,8.99,4,10.96,4,13.13C4,17.48,7.58,21,12,21c4.42,0,8-3.52,8-7.87 C20,10.96,19.1,8.99,17.65,7.56z M6,13.13c0-1.56,0.62-3.03,1.75-4.14L12,4.81L12,19C8.69,19,6,16.37,6,13.13z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
