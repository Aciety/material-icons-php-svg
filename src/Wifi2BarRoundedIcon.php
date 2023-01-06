<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['2', 'bar', 'cell', 'cellular', 'connection', 'data', 'internet', 'mobile', 'network', 'phone', 'scan', 'service', 'signal', 'wifi', 'wireless'],
)]
final class Wifi2BarRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('display', 'inline');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('display', 'inline');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $l0I0->setStyle('display', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M12,16c-1.1,0-2,0.9-2,2s0.9,2,2,2s2-0.9,2-2S13.1,16,12,16z M5.38,14.37c-0.63-0.63-0.59-1.71,0.13-2.24 C7.33,10.79,9.57,10,12,10c2.43,0,4.67,0.79,6.49,2.13c0.72,0.53,0.76,1.6,0.13,2.24c-0.53,0.54-1.37,0.57-1.98,0.12 C15.33,13.55,13.73,13,12,13c-1.73,0-3.33,0.55-4.64,1.49C6.75,14.93,5.91,14.9,5.38,14.37z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
