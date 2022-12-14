<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['notification'],
    tags: ['cancel', 'close', 'denied', 'deny', 'disabled', 'disturb', 'do', 'enabled', 'off', 'on', 'remove', 'silence', 'slash', 'stop'],
)]
final class DoNotDisturbOffTwoToneIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M7,13v-2h1.17L5.12,7.94C4.41,9.14,4,10.52,4,12c0,4.41,3.59,8,8,8 c1.48,0,2.86-0.41,4.06-1.12L10.17,13H7z M12,4c-1.48,0-2.86,0.41-4.06,1.12L13.83,11H17v2h-1.17l3.06,3.06 C19.59,14.86,20,13.48,20,12C20,7.59,16.41,4,12,4z');
        $l1I0->setStyle('enable-background', 'new');
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M12,4c4.41,0,8,3.59,8,8c0,1.48-0.41,2.86-1.12,4.06l1.46,1.46C21.39,15.93,22,14.04,22,12c0-5.52-4.48-10-10-10 C9.96,2,8.07,2.61,6.49,3.66l1.46,1.46C9.14,4.41,10.52,4,12,4z M17,13v-2h-3.17l2,2H17z M1.39,4.22l2.27,2.27 C2.61,8.07,2,9.96,2,12c0,5.52,4.48,10,10,10c2.04,0,3.93-0.61,5.51-1.66l2.27,2.27l1.41-1.41L2.81,2.81L1.39,4.22z M5.12,7.94 L8.17,11H7v2h3.17l5.88,5.88C14.86,19.59,13.48,20,12,20c-4.41,0-8-3.59-8-8C4,10.52,4.41,9.14,5.12,7.94z');
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
