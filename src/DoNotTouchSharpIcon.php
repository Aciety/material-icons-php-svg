<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['places'],
    tags: ['disabled', 'do', 'enabled', 'fingers', 'gesture', 'hand', 'not', 'off', 'on', 'slash', 'touch'],
)]
final class DoNotTouchSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M13,10.17l-2.5-2.5V1H13V10.17z M20,4h-2.5v7h-1V2H14v9.17l6,6V4z M9.5,3H7.01v1.18L9.5,6.67V3z M21.19,21.19L2.81,2.81 L1.39,4.22L7,9.83v4.3l-3.32-1.9L2,13.88L9.68,22h9.54l0.56,0.61L21.19,21.19z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
