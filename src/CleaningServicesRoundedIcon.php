<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['clean', 'cleaning', 'dust', 'services', 'sweep'],
)]
final class CleaningServicesRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M16,11h-1V4c0-1.66-1.34-3-3-3h0c-1.66,0-3,1.34-3,3v7H8c-2.76,0-5,2.24-5,5v5c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2v-5 C21,13.24,18.76,11,16,11z M19,21h-2v-3c0-0.55-0.45-1-1-1s-1,0.45-1,1v3h-2v-3c0-0.55-0.45-1-1-1s-1,0.45-1,1v3H9v-3 c0-0.55-0.45-1-1-1s-1,0.45-1,1v3H5v-5c0-1.65,1.35-3,3-3h8c1.65,0,3,1.35,3,3V21z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
