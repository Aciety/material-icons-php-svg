<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['social'],
    tags: ['measure', 'monitor', 'scale', 'weight'],
)]
final class ScaleSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M14,11V8c4.56-0.58,8-3.1,8-6H2c0,2.9,3.44,5.42,8,6l0,3c-3.68,0.73-8,3.61-8,11h6v-2H4.13c0.93-6.83,6.65-7.2,7.87-7.2 s6.94,0.37,7.87,7.2H16v2h6C22,14.61,17.68,11.73,14,11z M12,22c-1.1,0-2-0.9-2-2c0-0.55,0.22-1.05,0.59-1.41 C11.39,17.79,16,16,16,16s-1.79,4.61-2.59,5.41C13.05,21.78,12.55,22,12,22z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
