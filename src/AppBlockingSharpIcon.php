<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['Android', 'OS', 'app', 'application', 'block', 'blocking', 'cancel', 'cell', 'device', 'hardware', 'iOS', 'mobile', 'phone', 'stop', 'stopped', 'tablet'],
)]
final class AppBlockingSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M18,8c-2.21,0-4,1.79-4,4c0,2.21,1.79,4,4,4s4-1.79,4-4C22,9.79,20.21,8,18,8z M15.5,12c0-1.38,1.12-2.5,2.5-2.5 c0.42,0,0.8,0.11,1.15,0.29l-3.36,3.36C15.61,12.8,15.5,12.42,15.5,12z M18,14.5c-0.42,0-0.8-0.11-1.15-0.29l3.36-3.36 c0.18,0.35,0.29,0.73,0.29,1.15C20.5,13.38,19.38,14.5,18,14.5z');
        $l1I1->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M19,23v-6h-2v1H7V6h10v1h2V0.94L5,1v22H19z');
        $l1I1->addChild($l2I1);
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
