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
final class MonitorWeightIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M12,12c-1.66,0-3-1.34-3-3 s1.34-3,3-3s3,1.34,3,3S13.66,12,12,12z');
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
