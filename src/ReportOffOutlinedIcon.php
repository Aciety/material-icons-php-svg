<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['content'],
    tags: ['!', 'alert', 'attention', 'caution', 'danger', 'disabled', 'enabled', 'error', 'exclamation', 'important', 'mark', 'notification', 'octagon', 'off', 'offline', 'on', 'report', 'slash', 'symbol', 'warning'],
)]
final class ReportOffOutlinedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M9.1 5h5.8L19 9.1v5.8l-.22.22 1.42 1.41.8-.8V8.27L15.73 3H8.27l-.8.8 1.41 1.42z');
        $doc->addChild($l0I1);
        $l0I2 = new SVGCircle(cx: '12', cy: '16', r: '1');
        $doc->addChild($l0I2);
        $l0I3 = new SVGPath(d: 'M13 9.33V7h-2v.33zM2.41 1.58L1 2.99l3.64 3.64L3 8.27v7.46L8.27 21h7.46l1.64-1.64L21.01 23l1.41-1.41L2.41 1.58zM14.9 19H9.1L5 14.9V9.1l1.05-1.05 9.9 9.9L14.9 19z');
        $doc->addChild($l0I3);
    }
}
