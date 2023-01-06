<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['body', 'device', 'diet', 'health', 'monitor', 'scale', 'smart', 'weight'],
)]
final class MonitorWeightSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M21,3H3v18h18V3z M14.2,11.2c-3.23,2.43-6.84-1.18-4.4-4.41C13.03,4.37,16.63,7.98,14.2,11.2z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '10', y: '8.5', width: '1', height: '1');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '11.5', y: '8.5', width: '1', height: '1');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '13', y: '8.5', width: '1', height: '1');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
