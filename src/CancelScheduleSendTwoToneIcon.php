<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['cancel', 'email', 'mail', 'no', 'quit', 'remove', 'schedule', 'send', 'share', 'stop', 'x'],
)]
final class CancelScheduleSendTwoToneIcon extends SvgIcon
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M3,17.97l6.1-2.61c0.02-0.14,0.04-0.29,0.07-0.43L3,15.75V17.97z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M16.5,11c-3.03,0-5.5,2.47-5.5,5.5s2.47,5.5,5.5,5.5s5.5-2.47,5.5-5.5S19.53,11,16.5,11z M18.97,18.27 l-0.71,0.71l-1.77-1.77l-1.77,1.77l-0.71-0.71l1.77-1.77l-1.77-1.77l0.71-0.71l1.77,1.77l1.77-1.77l0.71,0.71l-1.77,1.77 L18.97,18.27z');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[3, 8.25], [10.52, 9.25], [3.01, 6.03]]);
        $l2I2->setStyle('opacity', '.3');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M16.5,9c-0.42,0-0.83,0.04-1.24,0.11c0,0,0,0,0,0L1.01,3L1,10l10.06,1.34c-0.42,0.44-0.78,0.93-1.09,1.46L1,14l0.01,7 l8.07-3.46c0,0,0,0,0,0C9.59,21.19,12.71,24,16.5,24c4.14,0,7.5-3.36,7.5-7.5S20.64,9,16.5,9z M3,8.25l0.01-2.22l7.51,3.22L3,8.25 z M9.1,15.36L3,17.97v-2.22l6.17-0.82C9.14,15.07,9.12,15.21,9.1,15.36z M16.5,22c-3.03,0-5.5-2.47-5.5-5.5s2.47-5.5,5.5-5.5 s5.5,2.47,5.5,5.5S19.53,22,16.5,22z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPolygon(points: [[18.27, 14.03], [16.5, 15.79], [14.73, 14.03], [14.03, 14.73], [15.79, 16.5], [14.03, 18.27], [14.73, 18.97], [16.5, 17.21], [18.27, 18.97], [18.97, 18.27], [17.21, 16.5], [18.97, 14.73]]);
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
