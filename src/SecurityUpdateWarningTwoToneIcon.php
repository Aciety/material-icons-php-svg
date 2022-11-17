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
    tags: ['!', 'Android', 'OS', 'alert', 'attention', 'caution', 'danger', 'device', 'download', 'error', 'exclamation', 'hardware', 'iOS', 'important', 'mark', 'mobile', 'notification', 'phone', 'security', 'symbol', 'tablet', 'update', 'warning'],
)]
final class SecurityUpdateWarningTwoToneIcon extends SVG
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
        $l3I0 = new SVGPath(d: 'M11,7h2v6h-2V7z M11,15h2v2h-2V15z');
        $l3I0->setStyle('opacity', '.3');
        $l2I0->addChild($l3I0);
        $l3I1 = new SVGRect(x: '11', y: '15', width: '2', height: '2');
        $l2I0->addChild($l3I1);
        $l3I2 = new SVGRect(x: '11', y: '7', width: '2', height: '6');
        $l2I0->addChild($l3I2);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M17,1.01L7,1C5.9,1,5,1.9,5,3v18c0,1.1,0.9,2,2,2h10c1.1,0,2-0.9,2-2V3C19,1.9,18.1,1.01,17,1.01z M17,21H7v-1h10V21z M17,18H7V6h10V18z M17,4H7V3h10V4z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M7,21h10v-1H7V21z M7,3v1h10V3H7z');
        $l2I2->setStyle('opacity', '.3');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
