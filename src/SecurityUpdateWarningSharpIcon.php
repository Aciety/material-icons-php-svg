<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['!', 'Android', 'OS', 'alert', 'attention', 'caution', 'danger', 'device', 'download', 'error', 'exclamation', 'hardware', 'iOS', 'important', 'mark', 'mobile', 'notification', 'phone', 'security', 'symbol', 'tablet', 'update', 'warning'],
)]
final class SecurityUpdateWarningSharpIcon extends SvgIcon
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
        $l2I0 = new SVGRect(x: '11', y: '15', width: '2', height: '2');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '11', y: '7', width: '2', height: '6');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M5.01,1v22H19V1H5.01z M17,18H7V6h10V18z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
