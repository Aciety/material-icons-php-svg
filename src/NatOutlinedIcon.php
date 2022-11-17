<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['communication', 'nat'],
)]
final class NatOutlinedIcon extends SVG
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
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M6.82,13H11v-2H6.82C6.4,9.84,5.3,9,4,9c-1.66,0-3,1.34-3,3s1.34,3,3,3C5.3,15,6.4,14.16,6.82,13z M4,13 c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1s1,0.45,1,1C5,12.55,4.55,13,4,13z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M23,12l-4-3v2h-4.05C14.45,5.95,10.19,2,5,2v2c4.42,0,8,3.58,8,8s-3.58,8-8,8v2c5.19,0,9.45-3.95,9.95-9H19v2L23,12z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
