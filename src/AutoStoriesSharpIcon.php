<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class AutoStoriesSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: '0', y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M21,4.6v2.12v7.24v2.66C19.86,16.21,18.69,16,17.5,16c-1.9,0-3.78,0.54-5.5,1.58v-3.62V7.79V5.48C10.38,4.55,8.51,4,6.5,4 S2.62,4.55,1,5.48V20c1.52-1.18,3.43-2,5.5-2s3.98,0.82,5.5,2c1.52-1.18,3.43-2,5.5-2s3.98,0.82,5.5,2V5.48 C22.37,5.12,21.7,4.84,21,4.6z');
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGPolygon(points: [[19, 0.5], [14, 5.5], [14, 15], [19, 10.5]]);
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
