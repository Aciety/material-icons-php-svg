<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['hardware'],
    tags: ['Android', 'OS', 'airplay', 'cast', 'cell', 'connect', 'device', 'hardware', 'iOS', 'mobile', 'phone', 'screen', 'screencast', 'smart', 'stream', 'tablet', 'video'],
)]
final class SmartScreenIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: '0', width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M21,5H3C1.9,5,1,5.9,1,7v10c0,1.1,0.9,2,2,2h18c1.1,0,2-0.9,2-2V7C23,5.9,22.1,5,21,5z M18,17H6V7h12V17z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '15', y: '11.25', width: '1.5', height: '1.5');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '12.5', y: '11.25', width: '1.5', height: '1.5');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '10', y: '11.25', width: '1.5', height: '1.5');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGRect(x: '7.5', y: '11.25', width: '1.5', height: '1.5');
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
