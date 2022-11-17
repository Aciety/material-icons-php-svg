<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['notification'],
    tags: ['!', 'alert', 'attention', 'camera', 'card', 'caution', 'danger', 'digital', 'error', 'exclamation', 'important', 'mark', 'memory', 'notification', 'photos', 'sd', 'secure', 'storage', 'symbol', 'warning'],
)]
final class SimCardAlertTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGGroup();
        $l4I0 = new SVGPath(d: 'M6,8.83V20h12V4h-7.17L6,8.83z M11,8h2v5h-2V8z M11,15h2v2h-2V15z');
        $l4I0->setStyle('enable-background', 'new');
        $l4I0->setStyle('opacity', '.3');
        $l3I0->addChild($l4I0);
        $l4I1 = new SVGPath(d: 'M18,2h-8L4,8v12c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V4C20,2.9,19.1,2,18,2z M18,20H6V8.83L10.83,4H18V20z');
        $l3I0->addChild($l4I1);
        $l4I2 = new SVGRect(x: '11', y: '15', width: '2', height: '2');
        $l3I0->addChild($l4I2);
        $l4I3 = new SVGRect(x: '11', y: '8', width: '2', height: '5');
        $l3I0->addChild($l4I3);
        $l2I0->addChild($l3I0);
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
