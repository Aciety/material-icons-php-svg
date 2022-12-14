<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['align', 'alignment', 'center', 'format', 'layout', 'lines', 'paragraph', 'rule', 'rules', 'style', 'text', 'vertical'],
)]
final class AlignVerticalCenterRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M21,11h-4V7.5C17,6.67,16.33,6,15.5,6h0C14.67,6,14,6.67,14,7.5V11h-4V4.5C10,3.67,9.33,3,8.5,3h0C7.67,3,7,3.67,7,4.5V11 H2.84c-0.55,0-1,0.45-1,1v0c0,0.55,0.45,1,1,1H7v6.5C7,20.33,7.67,21,8.5,21h0c0.83,0,1.5-0.67,1.5-1.5V13h4v3.5 c0,0.83,0.67,1.5,1.5,1.5h0c0.83,0,1.5-0.67,1.5-1.5V13h4c0.55,0,1-0.45,1-1v0C22,11.45,21.55,11,21,11z');
        $doc->addChild($l0I1);
    }
}
