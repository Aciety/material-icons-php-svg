<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['notification'],
    tags: ['bubble', 'cam', 'camera', 'chat', 'comment', 'communicate', 'facetime', 'feedback', 'message', 'speech', 'video', 'voice'],
)]
final class VoiceChatIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M20,2H4C2.9,2,2,2.9,2,4v18l4-4h14c1.1,0,2-0.9,2-2V4C22,2.9,21.1,2,20,2z M20,16H6l-2,2V4h16V16z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '11.25', y: '5', width: '1.5', height: '10');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '8.5', y: '7', width: '1.5', height: '6');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '6', y: '9', width: '1.5', height: '2');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGRect(x: '14', y: '7', width: '1.5', height: '6');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGRect(x: '16.5', y: '9', width: '1.5', height: '2');
        $l1I0->addChild($l2I5);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
