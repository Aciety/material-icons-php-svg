<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['search'],
    tags: ['architecture', 'building', 'camera', 'estate', 'film', 'filming', 'home', 'house', 'image', 'motion', 'nest', 'outdoor', 'outside', 'picture', 'place', 'real', 'residence', 'residential', 'shelter', 'video', 'videography'],
)]
final class CameraOutdoorRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M18,13c0-0.55-0.45-1-1-1h-4c-0.55,0-1,0.45-1,1v4c0,0.55,0.45,1,1,1h4c0.55,0,1-0.45,1-1v-1l1.27,0.67 C19.6,16.85,20,16.61,20,16.23v-2.46c0-0.38-0.4-0.62-0.73-0.44L18,14V13z M10.8,3.9l-6,4.5C4.3,8.78,4,9.37,4,10v9 c0,1.1,0.9,2,2,2h13c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1H6v-9l6-4.5l6,4.5l0,1h2v-1c0-0.63-0.3-1.22-0.8-1.6l-6-4.5 C12.49,3.37,11.51,3.37,10.8,3.9z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
