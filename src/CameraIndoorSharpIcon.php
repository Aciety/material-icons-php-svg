<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['search'],
    tags: ['architecture', 'building', 'camera', 'estate', 'film', 'filming', 'home', 'house', 'image', 'indoor', 'inside', 'motion', 'nest', 'picture', 'place', 'real', 'residence', 'residential', 'shelter', 'video', 'videography'],
)]
final class CameraIndoorSharpIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M12,3L4,9v12h16V9L12,3z M16,16.06L14,15v2H8v-6h6v2l2-1.06V16.06z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
