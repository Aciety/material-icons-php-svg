<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class BedroomParentSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGRect(x: '6.5', y: '12', width: '11', height: '2');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '7.25', y: '8.5', width: '4', height: '2');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '12.75', y: '8.5', width: '4', height: '2');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M22,2H2v20h20V2z M19,17h-1.5v-1.5h-11V17H5v-5l0.65-0.55V7H11c0.37,0,0.72,0.12,1,0.32C12.28,7.12,12.63,7,13,7h5.35 v4.45L19,12V17z');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
