<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['notification'],
    tags: ['!', 'alert', 'attention', 'caution', 'danger', 'error', 'exclamation', 'high', 'important', 'mark', 'notification', 'priority', 'symbol', 'warning'],
)]
final class PriorityHighRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGCircle(cx: '12', cy: '19', r: '2');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M12 3c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2s2-.9 2-2V5c0-1.1-.9-2-2-2z');
        $doc->addChild($l0I2);
    }
}
