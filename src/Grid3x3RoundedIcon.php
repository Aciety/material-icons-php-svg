<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['3', 'grid', 'layout', 'line', 'space'],
)]
final class Grid3x3RoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M20,9L20,9c0-0.55-0.45-1-1-1h-3V5c0-0.55-0.45-1-1-1h0c-0.55,0-1,0.45-1,1v3h-4V5c0-0.55-0.45-1-1-1h0C8.45,4,8,4.45,8,5 v3H5C4.45,8,4,8.45,4,9v0c0,0.55,0.45,1,1,1h3v4H5c-0.55,0-1,0.45-1,1v0c0,0.55,0.45,1,1,1h3v3c0,0.55,0.45,1,1,1h0 c0.55,0,1-0.45,1-1v-3h4v3c0,0.55,0.45,1,1,1h0c0.55,0,1-0.45,1-1v-3h3c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1h-3v-4h3 C19.55,10,20,9.55,20,9z M14,14h-4v-4h4V14z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
