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
final class VideoChatRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M20,2H4C2.9,2,2.01,2.9,2.01,4L2,19.58c0,0.89,1.08,1.34,1.71,0.71L6,18h14c1.1,0,2-0.9,2-2V4C22,2.9,21.1,2,20,2z M16.15,12.15L15,11.01V13c0,0.55-0.45,1-1,1H8c-0.55,0-1-0.45-1-1V7c0-0.55,0.45-1,1-1h6c0.55,0,1,0.45,1,1v1.99l1.15-1.14 C16.46,7.53,17,7.76,17,8.2v3.59C17,12.24,16.46,12.47,16.15,12.15z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
