<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['social'],
    tags: ['back', 'fingers', 'gesture', 'hand', 'raised'],
)]
final class BackHandIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M13,24c-3.26,0-6.19-1.99-7.4-5.02l-3.03-7.61C2.26,10.58,3,9.79,3.81,10.05l0.79,0.26c0.56,0.18,1.02,0.61,1.24,1.16 L7.25,15H8V3.25C8,2.56,8.56,2,9.25,2s1.25,0.56,1.25,1.25V12h1V1.25C11.5,0.56,12.06,0,12.75,0S14,0.56,14,1.25V12h1V2.75 c0-0.69,0.56-1.25,1.25-1.25c0.69,0,1.25,0.56,1.25,1.25V12h1V5.75c0-0.69,0.56-1.25,1.25-1.25S21,5.06,21,5.75V16 C21,20.42,17.42,24,13,24z');
        $doc->addChild($l0I1);
    }
}
