<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['account', 'avatar', 'box', 'face', 'human', 'people', 'person', 'profile', 'square', 'thumbnail', 'user'],
)]
final class AccountBoxTwoToneIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M5,17.86C6.8,16.09,9.27,15,12,15s5.2,1.09,7,2.86V5H5V17.86z M12,6 c1.93,0,3.5,1.57,3.5,3.5S13.93,13,12,13c-1.93,0-3.5-1.57-3.5-3.5S10.07,6,12,6z');
        $l2I0->setStyle('enable-background', 'new');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M17,19H7v-0.24 C8.42,17.62,10.16,17,12,17s3.58,0.62,5,1.76V19z M19,17.86C17.2,16.09,14.73,15,12,15s-5.2,1.09-7,2.86V5h14V17.86z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M12,13c1.93,0,3.5-1.57,3.5-3.5S13.93,6,12,6c-1.93,0-3.5,1.57-3.5,3.5S10.07,13,12,13z M12,8c0.83,0,1.5,0.67,1.5,1.5 S12.83,11,12,11s-1.5-0.67-1.5-1.5S11.17,8,12,8z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
