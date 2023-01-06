<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['action'],
    tags: ['action', 'arrow', 'dot', 'invoke', 'pin'],
)]
final class PinInvokeSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M22,12v8H2V4h12l0,2H4v12h16v-6H22z M22,7c0-1.66-1.34-3-3-3c-1.66,0-3,1.34-3,3s1.34,3,3,3C20.66,10,22,8.66,22,7z M11.47,12.12l-2.83,2.83l1.41,1.41l2.83-2.83L15,15.66V10H9.34L11.47,12.12z');
        $doc->addChild($l0I1);
    }
}
