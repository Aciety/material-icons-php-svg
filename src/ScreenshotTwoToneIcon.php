<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['Android', 'OS', 'cell', 'crop', 'device', 'hardware', 'iOS', 'mobile', 'phone', 'screen', 'screenshot', 'tablet'],
)]
final class ScreenshotTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M17,1.01L7,1C5.9,1,5,1.9,5,3v18c0,1.1,0.9,2,2,2h10c1.1,0,2-0.9,2-2V3C19,1.9,18.1,1.01,17,1.01z M17,21H7v-1h10V21z M17,18H7V6h10V18z M17,4H7V3h10V4z M9.5,8.5H12V7H8v4h1.5V8.5z M12,17h4v-4h-1.5v2.5H12V17z');
        $l2I0->addChild($l3I0);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGGroup();
        $l3I0 = new SVGRect(x: '7', y: '3', width: '10', height: '1');
        $l2I1->addChild($l3I0);
        $l3I1 = new SVGRect(x: '7', y: '20', width: '10', height: '1');
        $l2I1->addChild($l3I1);
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
