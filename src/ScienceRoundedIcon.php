<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['beaker', 'chemical', 'chemistry', 'experiment', 'flask', 'glass', 'laboratory', 'research', 'science', 'tube'],
)]
final class ScienceRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20.54,17.73L15,11V5h1c0.55,0,1-0.45,1-1s-0.45-1-1-1H8C7.45,3,7,3.45,7,4s0.45,1,1,1h1v6l-5.54,6.73 C3.14,18.12,3,18.56,3,19c0.01,1.03,0.82,2,2,2H19c1.19,0,2-0.97,2-2C21,18.56,20.86,18.12,20.54,17.73z');
        $doc->addChild($l0I1);
    }
}
