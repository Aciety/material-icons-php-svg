<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['align', 'alignment', 'center', 'format', 'horizontal', 'layout', 'lines', 'paragraph', 'rule', 'rules', 'style', 'text'],
)]
final class AlignHorizontalCenterRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12,2L12,2c0.55,0,1,0.45,1,1v4l6.5,0C20.33,7,21,7.67,21,8.5v0c0,0.83-0.67,1.5-1.5,1.5H13v4h3.5c0.83,0,1.5,0.67,1.5,1.5 v0c0,0.83-0.67,1.5-1.5,1.5H13v4c0,0.55-0.45,1-1,1h0c-0.55,0-1-0.45-1-1v-4H7.5C6.67,17,6,16.33,6,15.5v0C6,14.67,6.67,14,7.5,14 H11v-4H4.5C3.67,10,3,9.33,3,8.5v0C3,7.67,3.67,7,4.5,7H11l0-4C11,2.45,11.45,2,12,2z');
        $doc->addChild($l0I1);
    }
}
