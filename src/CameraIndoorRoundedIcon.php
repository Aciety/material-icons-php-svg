<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['search'],
    tags: ['architecture', 'building', 'camera', 'estate', 'film', 'filming', 'home', 'house', 'image', 'indoor', 'inside', 'motion', 'nest', 'picture', 'place', 'real', 'residence', 'residential', 'shelter', 'video', 'videography'],
)]
final class CameraIndoorRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M10.8,3.65l-6,4.5C4.3,8.53,4,9.12,4,9.75v9c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2v-9c0-0.63-0.3-1.22-0.8-1.6l-6-4.5 C12.49,3.12,11.51,3.12,10.8,3.65z M15.27,15.67L14,15v1c0,0.55-0.45,1-1,1H9c-0.55,0-1-0.45-1-1v-4c0-0.55,0.45-1,1-1h4 c0.55,0,1,0.45,1,1v1l1.27-0.67C15.6,12.15,16,12.39,16,12.77v2.46C16,15.61,15.6,15.85,15.27,15.67z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
