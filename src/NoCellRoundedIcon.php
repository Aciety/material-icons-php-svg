<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['places'],
    tags: ['Android', 'OS', 'cell', 'device', 'disabled', 'enabled', 'hardware', 'iOS', 'mobile', 'no', 'off', 'on', 'phone', 'slash', 'tablet'],
)]
final class NoCellRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M8.83,6l-3.7-3.7C5.42,1.55,6.15,1,7,1l10,0.01c1.1,0,2,0.89,2,1.99v13.17l-2-2V6H8.83z M20.49,21.9 c-0.39,0.39-1.02,0.39-1.41,0l-0.2-0.2C18.58,22.45,17.85,23,17,23H7c-1.1,0-2-0.9-2-2V7.83l-2.9-2.9c-0.39-0.39-0.39-1.02,0-1.41 c0.39-0.39,1.02-0.39,1.41,0l16.97,16.97C20.88,20.88,20.88,21.51,20.49,21.9z M15.17,18L7,9.83V18H15.17z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
