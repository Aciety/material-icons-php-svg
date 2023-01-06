<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['balance', 'equal', 'equity', 'impartiality', 'justice', 'parity', 'stability. equilibrium', 'steadiness', 'symmetry'],
)]
final class BalanceRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M13,19V7.83c0.85-0.3,1.53-0.98,1.83-1.83H18l-2.78,6.49c-0.17,0.39-0.23,0.84-0.11,1.25c0.39,1.3,1.76,2.26,3.39,2.26 s3.01-0.96,3.39-2.26c0.12-0.41,0.06-0.86-0.11-1.25L19,6h1c0.55,0,1-0.45,1-1s-0.45-1-1-1h-5.17C14.42,2.83,13.31,2,12,2 S9.58,2.83,9.17,4L4,4C3.45,4,3,4.45,3,5c0,0.55,0.45,1,1,1h1l-2.78,6.49c-0.17,0.39-0.23,0.84-0.11,1.25 C2.49,15.04,3.87,16,5.5,16s3.01-0.96,3.39-2.26c0.12-0.41,0.06-0.86-0.11-1.25L6,6h3.17c0.3,0.85,0.98,1.53,1.83,1.83V19 M11,19H3 c-0.55,0-1,0.45-1,1s0.45,1,1,1h18c0.55,0,1-0.45,1-1s-0.45-1-1-1h-8 M20.37,13h-3.74l1.87-4.36L20.37,13z M7.37,13H3.63L5.5,8.64 L7.37,13z M12,6c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1s1,0.45,1,1C13,5.55,12.55,6,12,6z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
