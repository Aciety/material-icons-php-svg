<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class SynagogueIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M6,8v13h4v-5c0-1.1,0.9-2,2-2s2,0.9,2,2v5h4V8l-6-5L6,8z M13.5,10c0,0.83-0.67,1.5-1.5,1.5s-1.5-0.67-1.5-1.5 s0.67-1.5,1.5-1.5S13.5,9.17,13.5,10z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M3,5C1.9,5,1,5.9,1,7v1h4V7C5,5.9,4.1,5,3,5z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '1', y: '9', width: '4', height: '12');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M21,5c-1.1,0-2,0.9-2,2v1h4V7C23,5.9,22.1,5,21,5z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGRect(x: '19', y: '9', width: '4', height: '12');
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
