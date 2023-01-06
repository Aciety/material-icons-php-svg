<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['places'],
    tags: ['appliance', 'clothes', 'electric', 'iron', 'ironing', 'machine', 'object'],
)]
final class IronOutlinedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M21,6c-1.66,0-3,1.34-3,3v4c0,0.55-0.45,1-1,1v-4c0-1.66-1.34-3-3-3h-4c-1.66,0-3,1.34-3,3h2c0-0.55,0.45-1,1-1h4 c0.55,0,1,0.45,1,1v1H6c-2.21,0-4,1.79-4,4v3h15v-2c1.66,0,3-1.34,3-3V9c0-0.55,0.45-1,1-1h1V6H21z M15,16H4v-1c0-1.1,0.9-2,2-2h9 V16z');
        $doc->addChild($l0I1);
    }
}
