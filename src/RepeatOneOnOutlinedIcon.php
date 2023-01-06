<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['av'],
    tags: ['arrow', 'arrows', 'control', 'controls', 'digit', 'media', 'music', 'number', 'on', 'one', 'repeat', 'symbol', 'video'],
)]
final class RepeatOneOnOutlinedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M21,1H3C1.9,1,1,1.9,1,3v18c0,1.1,0.9,2,2,2h18c1.1,0,2-0.9,2-2V3C23,1.9,22.1,1,21,1z M19,19H6.83l1.58,1.58L7,22l-4-4 l4-4l1.41,1.42L6.83,17H17v-4h2V19z M10,10.5V9h3v6h-1.5v-4.5H10z M17,10l-1.41-1.42L17.17,7H7v4H5V5h12.17l-1.58-1.58L17,2l4,4 L17,10z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
