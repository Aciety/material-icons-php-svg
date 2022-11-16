<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

final class AnalyticsSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGRect(x: '7', y: '12', width: '2', height: '5');
        $l0I1->setStyle('fill', 'none');
        $doc->addChild($l0I1);
        $l0I2 = new SVGRect(x: '11', y: '14', width: '2', height: '3');
        $l0I2->setStyle('fill', 'none');
        $doc->addChild($l0I2);
        $l0I3 = new SVGRect(x: '15', y: '7', width: '2', height: '10');
        $l0I3->setStyle('fill', 'none');
        $doc->addChild($l0I3);
        $l0I4 = new SVGPath(d: 'M3,3v18h18V3H3z M9,17H7v-5h2V17z M13,17h-2v-3h2V17z M13,12h-2v-2h2V12z M17,17h-2V7h2V17z');
        $doc->addChild($l0I4);
    }
}
