<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['cancel', 'email', 'mail', 'no', 'quit', 'remove', 'schedule', 'send', 'share', 'stop', 'x'],
)]
final class CancelScheduleSendRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M16.5,9c-0.42,0-0.83,0.04-1.24,0.11L2.4,3.6C1.74,3.31,1.01,3.8,1.01,4.51L1,9.2c0,0.47,0.33,0.88,0.78,0.98L10,12 l-8.22,1.83C1.33,13.93,1,14.33,1,14.8l0.01,4.68c0,0.72,0.73,1.2,1.39,0.92l6.68-2.86C9.59,21.19,12.71,24,16.5,24 c4.14,0,7.5-3.36,7.5-7.5S20.64,9,16.5,9z M16.5,22c-3.03,0-5.5-2.47-5.5-5.5s2.47-5.5,5.5-5.5s5.5,2.47,5.5,5.5S19.53,22,16.5,22 z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M18.62,14.38c-0.2-0.2-0.51-0.2-0.71,0l-1.41,1.41l-1.41-1.41c-0.2-0.2-0.51-0.2-0.71,0s-0.2,0.51,0,0.71l1.41,1.41 l-1.41,1.41c-0.2,0.2-0.2,0.51,0,0.71c0.2,0.2,0.51,0.2,0.71,0l1.41-1.41l1.41,1.41c0.2,0.2,0.51,0.2,0.71,0 c0.2-0.2,0.2-0.51,0-0.71l-1.41-1.41l1.41-1.41C18.82,14.89,18.82,14.57,18.62,14.38z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
