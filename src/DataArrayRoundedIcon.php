<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['array', 'brackets', 'code', 'coder', 'data', 'parentheses'],
)]
final class DataArrayRoundedIcon extends SVG
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M15,5L15,5c0,0.55,0.45,1,1,1h2v12h-2c-0.55,0-1,0.45-1,1v0c0,0.55,0.45,1,1,1h2c1.1,0,2-0.9,2-2V6c0-1.1-0.9-2-2-2h-2 C15.45,4,15,4.45,15,5z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M6,20h2c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1H6V6h2c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1H6C4.9,4,4,4.9,4,6v12 C4,19.1,4.9,20,6,20z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
