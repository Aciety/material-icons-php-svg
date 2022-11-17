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
    tags: ['balance', 'equal', 'equity', 'impartiality', 'justice', 'parity', 'stability. equilibrium', 'steadiness', 'symmetry'],
)]
final class BalanceOutlinedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M13,7.83c0.85-0.3,1.53-0.98,1.83-1.83H18l-3,7c0,1.66,1.57,3,3.5,3s3.5-1.34,3.5-3l-3-7h2V4h-6.17 C14.42,2.83,13.31,2,12,2S9.58,2.83,9.17,4L3,4v2h2l-3,7c0,1.66,1.57,3,3.5,3S9,14.66,9,13L6,6h3.17c0.3,0.85,0.98,1.53,1.83,1.83 V19H2v2h20v-2h-9V7.83z M20.37,13h-3.74l1.87-4.36L20.37,13z M7.37,13H3.63L5.5,8.64L7.37,13z M12,6c-0.55,0-1-0.45-1-1 c0-0.55,0.45-1,1-1s1,0.45,1,1C13,5.55,12.55,6,12,6z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
