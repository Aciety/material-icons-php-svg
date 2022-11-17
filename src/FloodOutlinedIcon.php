<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['crisis', 'disaster', 'natural', 'rain', 'storm', 'weather'],
)]
final class FloodOutlinedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M18.67,19c-1.95,0-2.09,1-3.33,1c-1.19,0-1.42-1-3.33-1c-1.95,0-2.1,1-3.34,1c-1.24,0-1.38-1-3.33-1c-1.95,0-2.1,1-3.34,1 v2c1.95,0,2.11-1,3.34-1c1.24,0,1.38,1,3.33,1c1.95,0,2.1-1,3.34-1c1.22,0,1.4,1,3.33,1c1.93,0,2.1-1,3.33-1c1.22,0,1.4,1,3.33,1 v-2C20.76,20,20.62,19,18.67,19z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M8.68,17.5c1.95,0,2.09-1,3.33-1c1.19,0,1.42,1,3.33,1c1.95,0,2.09-1,3.33-1c1.19,0,1.4,0.98,3.31,1v-2 c-0.63,0-1-0.28-1.48-0.55l-2.02-7.53l2.09,0.85l0.74-1.86L9.78,2L2,11.61l1.57,1.23l1.39-1.78l0.93,3.48 c-0.18-0.02-0.35-0.05-0.56-0.05c-1.95,0-2.09,1-3.33,1v2c1.9,0,2.17-1,3.35-1C6.54,16.5,6.77,17.5,8.68,17.5z M10.42,4.41 l5.74,2.09l2.15,8.02c-1.54,0.11-1.82,0.89-2.85,0.96l-1.42-5.31l-3.86,1.04l0.91,3.39c-1.12,0.25-1.41,0.9-2.42,0.9 c-0.18,0-0.33-0.02-0.45-0.05L6.5,9.09L10.42,4.41z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
