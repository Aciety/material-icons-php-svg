<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['content'],
    tags: ['cast', 'connected', 'feed', 'live', 'network', 'signal', 'stream', 'wireless'],
)]
final class StreamRoundedIcon extends SvgIcon
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
        $l2I0 = new SVGCircle(cx: '20', cy: '12', r: '2');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '4', cy: '12', r: '2');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGCircle(cx: '12', cy: '20', r: '2');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M7.89,14.65l-2.94,2.93c-0.39,0.39-0.39,1.02,0,1.41s1.02,0.39,1.41,0l2.94-2.93c0.39-0.38,0.39-1.02,0-1.41 C8.91,14.26,8.28,14.26,7.89,14.65z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M6.41,4.94C6.02,4.55,5.39,4.55,5,4.94C4.61,5.33,4.61,5.96,5,6.35l2.93,2.94c0.39,0.39,1.02,0.39,1.42,0 C9.73,8.9,9.73,8.27,9.34,7.88L6.41,4.94z');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M16.12,14.65c-0.39-0.39-1.02-0.39-1.42,0c-0.39,0.39-0.39,1.02,0,1.41L17.64,19c0.39,0.39,1.02,0.39,1.41,0 s0.39-1.02,0-1.41L16.12,14.65z');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGPath(d: 'M16.06,9.33l2.99-2.98c0.39-0.4,0.39-1.03,0-1.42c-0.39-0.39-1.02-0.39-1.41,0l-2.99,2.98c-0.39,0.39-0.39,1.02,0,1.42 C15.04,9.72,15.67,9.72,16.06,9.33z');
        $l1I0->addChild($l2I6);
        $l2I7 = new SVGCircle(cx: '12', cy: '4', r: '2');
        $l1I0->addChild($l2I7);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
