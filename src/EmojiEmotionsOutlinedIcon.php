<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class EmojiEmotionsOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGCircle(cx: '15.5', cy: '9.5', r: '1.5');
        $l1I1->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '8.5', cy: '9.5', r: '1.5');
        $l1I1->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M12,18c2.28,0,4.22-1.66,5-4H7C7.78,16.34,9.72,18,12,18z');
        $l1I1->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M11.99,2C6.47,2,2,6.48,2,12c0,5.52,4.47,10,9.99,10C17.52,22,22,17.52,22,12C22,6.48,17.52,2,11.99,2z M12,20 c-4.42,0-8-3.58-8-8c0-4.42,3.58-8,8-8s8,3.58,8,8C20,16.42,16.42,20,12,20z');
        $l1I1->addChild($l2I3);
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
