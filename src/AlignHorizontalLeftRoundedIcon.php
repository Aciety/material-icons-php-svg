<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['align', 'alignment', 'format', 'horizontal', 'layout', 'left', 'lines', 'paragraph', 'rule', 'rules', 'style', 'text'],
)]
final class AlignHorizontalLeftRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M3,22L3,22c-0.55,0-1-0.45-1-1V3c0-0.55,0.45-1,1-1h0c0.55,0,1,0.45,1,1v18C4,21.55,3.55,22,3,22z M20.5,7h-13 C6.67,7,6,7.67,6,8.5v0C6,9.33,6.67,10,7.5,10h13c0.83,0,1.5-0.67,1.5-1.5v0C22,7.67,21.33,7,20.5,7z M14.5,14h-7 C6.67,14,6,14.67,6,15.5v0C6,16.33,6.67,17,7.5,17h7c0.83,0,1.5-0.67,1.5-1.5v0C16,14.67,15.33,14,14.5,14z');
        $doc->addChild($l0I1);
    }
}
