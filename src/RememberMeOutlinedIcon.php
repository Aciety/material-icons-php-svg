<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['Android', 'OS', 'avatar', 'device', 'hardware', 'human', 'iOS', 'identity', 'me', 'mobile', 'people', 'person', 'phone', 'profile', 'remember', 'tablet', 'user'],
)]
final class RememberMeOutlinedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M17,1H7C5.9,1,5,1.9,5,3v18c0,1.1,0.9,2,2,2h10c1.1,0,2-0.9,2-2V3C19,1.9,18.1,1,17,1z M17,21H7v-1h10V21z M17,18H7v-0.48 C8.47,16.53,10.22,16,12,16s3.53,0.53,5,1.52V18z M17,15.21C15.5,14.44,13.8,14,12,14s-3.5,0.44-5,1.21V6h10V15.21z M17,4H7V3h10 V4z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M12,13c1.66,0,3-1.34,3-3s-1.34-3-3-3s-3,1.34-3,3S10.34,13,12,13z M12,9c0.55,0,1,0.45,1,1s-0.45,1-1,1s-1-0.45-1-1 S11.45,9,12,9z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
