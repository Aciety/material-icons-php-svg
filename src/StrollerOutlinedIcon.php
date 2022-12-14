<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['places'],
    tags: ['baby', 'care', 'carriage', 'child', 'children', 'infant', 'kid', 'newborn', 'stroller', 'toddler', 'young'],
)]
final class StrollerOutlinedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M18,20c0,1.1-0.9,2-2,2s-2-0.9-2-2s0.9-2,2-2S18,18.9,18,20z M6,18c-1.1,0-2,0.9-2,2s0.9,2,2,2s2-0.9,2-2S7.1,18,6,18z M15,8.66L9.6,15H15V8.66 M18.65,3C20.52,3,22,4.56,22,6.48V7h-2V6.48C20,5.66,19.42,5,18.65,5C17.97,5,17.58,5.59,17,6.27V15 c0,1.1-0.9,2-2,2H7.43c-0.85,0-1.31-1-0.76-1.65l8.8-10.32C16.11,4.27,16.99,3,18.65,3L18.65,3z M10,5C9.35,5,8.71,5.09,8.09,5.27 l1.4,1.4l1.37-1.61C10.58,5.02,10.29,5,10,5 M10,3c1.56,0,3.03,0.4,4.3,1.1l-4.7,5.51L4.72,4.72C6.21,3.64,8.03,3,10,3L10,3z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
