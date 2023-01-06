<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['api', 'developer', 'development', 'enterprise', 'software'],
)]
final class ApiRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M13,13L13,13c-0.56,0.56-1.45,0.56-2,0.01L11,13c-0.55-0.55-0.55-1.44,0-1.99L11,11c0.55-0.55,1.44-0.55,1.99,0L13,11 C13.55,11.55,13.55,12.45,13,13z M12,6l2.12,2.12l2.5-2.5l-3.2-3.2c-0.78-0.78-2.05-0.78-2.83,0l-3.2,3.2l2.5,2.5L12,6z M6,12 l2.12-2.12l-2.5-2.5l-3.2,3.2c-0.78,0.78-0.78,2.05,0,2.83l3.2,3.2l2.5-2.5L6,12z M18,12l-2.12,2.12l2.5,2.5l3.2-3.2 c0.78-0.78,0.78-2.05,0-2.83l-3.2-3.2l-2.5,2.5L18,12z M12,18l-2.12-2.12l-2.5,2.5l3.2,3.2c0.78,0.78,2.05,0.78,2.83,0l3.2-3.2 l-2.5-2.5L12,18z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
