<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['1', 'bar', 'cell', 'cellular', 'connection', 'data', 'internet', 'mobile', 'network', 'phone', 'scan', 'service', 'signal', 'wifi', 'wireless'],
)]
final class Wifi1BarOutlinedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M15.53,17.46L12,21l-3.53-3.54C9.37,16.56,10.62,16,12,16S14.63,16.56,15.53,17.46z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
