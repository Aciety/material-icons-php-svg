<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['av'],
    tags: ['hear', 'hearing', 'mic', 'microphone', 'noise', 'record', 'sound', 'voice'],
)]
final class MicTwoToneIcon extends SvgIcon
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
        $l1I2 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I2->setStyle('fill', 'none');
        $l0I0->addChild($l1I2);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M12,12c0.55,0,1-0.45,1-1V5c0-0.55-0.45-1-1-1s-1,0.45-1,1v6C11,11.55,11.45,12,12,12z');
        $l2I0->setStyle('opacity', '.3');
        $l1I1->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M12,14c1.66,0,3-1.34,3-3V5c0-1.66-1.34-3-3-3S9,3.34,9,5v6C9,12.66,10.34,14,12,14z M11,5c0-0.55,0.45-1,1-1s1,0.45,1,1 v6c0,0.55-0.45,1-1,1s-1-0.45-1-1V5z');
        $l1I1->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M17,11c0,2.76-2.24,5-5,5s-5-2.24-5-5H5c0,3.53,2.61,6.43,6,6.92V21h2v-3.08c3.39-0.49,6-3.39,6-6.92H17z');
        $l1I1->addChild($l2I2);
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
