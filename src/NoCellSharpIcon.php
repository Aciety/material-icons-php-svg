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
final class NoCellSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M21.19,21.19L2.81,2.81L1.39,4.22L5,7.83V23h14v-1.17l0.78,0.78L21.19,21.19z M7,18V9.83L15.17,18H7z M8.83,6L5,2.17V1h14 v15.17l-2-2V6H8.83z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
