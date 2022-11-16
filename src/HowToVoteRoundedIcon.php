<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class HowToVoteRoundedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M18,12.18l-1.5,1.64l2,2.18h-13l2-2.18L6,12.18l-3,3.27V20c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2v-4.54L18,12.18z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M10.59,14.42c0.78,0.79,2.05,0.8,2.84,0.01l4.98-4.98c0.78-0.78,0.78-2.05,0-2.83l-3.54-3.53c-0.78-0.78-2.05-0.78-2.83,0 L7.09,8.04c-0.78,0.78-0.78,2.03-0.01,2.82L10.59,14.42z M13.46,4.5l3.53,3.53l-4.94,4.94L8.52,9.44L13.46,4.5z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
