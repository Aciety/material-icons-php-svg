<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['christian', 'christianity', 'religion', 'spiritual', 'worship'],
)]
final class ChurchTwoToneIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M16,10.04L12,8l-4,2.04v3.35l-4,1.81V20h5v-2.04c0-1.69,1.35-3.06,3-3.06c1.65,0,3,1.37,3,3.06V20h5v-4.79 l-4-1.81V10.04z M12,13.5c-0.83,0-1.5-0.67-1.5-1.5s0.67-1.5,1.5-1.5s1.5,0.67,1.5,1.5S12.83,13.5,12,13.5z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M18,12.22V9l-5-2.5V5h2V3h-2V1h-2v2H9v2h2v1.5L6,9v3.22L2,14v8h9v-4c0-0.55,0.45-1,1-1s1,0.45,1,1v4h9v-8L18,12.22z M20,20h-5v-2.04c0-1.69-1.35-3.06-3-3.06c-1.65,0-3,1.37-3,3.06V20H4v-4.79l4-1.81v-3.35L12,8l4,2.04v3.35l4,1.81V20z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGCircle(cx: '12', cy: '12', r: '1.5');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
