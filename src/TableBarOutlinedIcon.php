<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['search'],
    tags: ['bar', 'cafe', 'round', 'table'],
)]
final class TableBarOutlinedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M22,7.5C22,5.57,17.52,4,12,4S2,5.57,2,7.5c0,1.81,3.95,3.31,9,3.48V15H9.35c-0.82,0-1.55,0.5-1.86,1.26L6,20h2l1.2-3h5.6 l1.2,3h2l-1.5-3.74C16.2,15.5,15.46,15,14.65,15H13v-4.02C18.05,10.81,22,9.31,22,7.5z M12,6c4.05,0,6.74,0.86,7.72,1.5 C18.74,8.14,16.05,9,12,9S5.26,8.14,4.28,7.5C5.26,6.86,7.95,6,12,6z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
