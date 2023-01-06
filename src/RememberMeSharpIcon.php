<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['Android', 'OS', 'avatar', 'device', 'hardware', 'human', 'iOS', 'identity', 'me', 'mobile', 'people', 'person', 'phone', 'profile', 'remember', 'tablet', 'user'],
)]
final class RememberMeSharpIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M19,1H5v22h14V1z M17,15.21C15.5,14.44,13.8,14,12,14s-3.5,0.44-5,1.21V6h10V15.21z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '12', cy: '10', r: '3');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
