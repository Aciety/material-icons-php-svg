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
final class FrontHandIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M19.75,8c-0.69,0-1.25,0.56-1.25,1.25V15H18c-1.65,0-3,1.35-3,3h-1c0-2.04,1.53-3.72,3.5-3.97l0-10.78 C17.5,2.56,16.94,2,16.25,2C15.56,2,15,2.56,15,3.25V11h-1V1.25C14,0.56,13.44,0,12.75,0S11.5,0.56,11.5,1.25V11h-1V2.75 c0-0.69-0.56-1.25-1.25-1.25S8,2.06,8,2.75V12H7V5.75C7,5.06,6.44,4.5,5.75,4.5S4.5,5.06,4.5,5.75v10c0,4.56,3.69,8.25,8.25,8.25 S21,20.31,21,15.75v-6.5C21,8.56,20.44,8,19.75,8z');
        $doc->addChild($l0I1);
    }
}
