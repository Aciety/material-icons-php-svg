<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['0', 'bar', 'cell', 'cellular', 'data', 'internet', 'mobile', 'network', 'phone', 'signal', 'speed', 'wifi', 'wireless'],
)]
final class SignalCellular0BarIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20,6.83V20H6.83L20,6.83 M22,2L2,22h20V2L22,2z');
        $doc->addChild($l0I1);
    }
}
