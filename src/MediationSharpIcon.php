<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['arrow', 'arrows', 'direction', 'dots', 'mediation', 'right'],
)]
final class MediationSharpIcon extends SVG
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
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M18,13h-5.06c-0.34,3.1-2.26,5.72-4.94,7.05C7.96,21.69,6.64,23,5,23c-1.66,0-3-1.34-3-3s1.34-3,3-3 c0.95,0,1.78,0.45,2.33,1.14c1.9-1.03,3.26-2.91,3.58-5.14h-3.1C7.4,14.16,6.3,15,5,15c-1.66,0-3-1.34-3-3s1.34-3,3-3 c1.3,0,2.4,0.84,2.82,2h3.1C10.6,8.77,9.23,6.9,7.33,5.86C6.78,6.55,5.95,7,5,7C3.34,7,2,5.66,2,4s1.34-3,3-3 c1.64,0,2.96,1.31,2.99,2.95c2.68,1.33,4.6,3.95,4.94,7.05H18V8l4,4l-4,4V13z');
        $l1I1->addChild($l2I0);
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
