<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['social'],
    tags: ['fingers', 'front', 'gesture', 'hand', 'hello', 'palm', 'stop'],
)]
final class FrontHandSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M18.5,8v7H18c-1.65,0-3,1.35-3,3h-1c0-2.04,1.53-3.72,3.5-3.97V2H15v9h-1V0h-2.5v11h-1V1.5H8V12H7V4.5H4.5v11.25 c0,4.56,3.69,8.25,8.25,8.25S21,20.31,21,15.75V8H18.5z');
        $doc->addChild($l0I1);
    }
}
