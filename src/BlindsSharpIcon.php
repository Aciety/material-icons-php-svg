<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['home'],
    tags: ['blinds', 'cover', 'curtains', 'nest', 'open', 'shade', 'shutter', 'sunshade'],
)]
final class BlindsSharpIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M20,19V3H4v16H2v2h20v-2H20z M16,9h2v2h-2V9z M14,11H6V9h8V11z M18,7h-2V5h2V7z M14,5v2H6V5H14z M6,19v-6h8v1.82 c-0.45,0.32-0.75,0.84-0.75,1.43c0,0.97,0.78,1.75,1.75,1.75s1.75-0.78,1.75-1.75c0-0.59-0.3-1.12-0.75-1.43V13h2v6H6z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
