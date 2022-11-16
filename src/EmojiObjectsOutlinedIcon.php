<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class EmojiObjectsOutlinedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M12,3c-0.46,0-0.93,0.04-1.4,0.14C7.84,3.67,5.64,5.9,5.12,8.66c-0.48,2.61,0.48,5.01,2.22,6.56 C7.77,15.6,8,16.13,8,16.69V19c0,1.1,0.9,2,2,2h0.28c0.35,0.6,0.98,1,1.72,1s1.38-0.4,1.72-1H14c1.1,0,2-0.9,2-2v-2.31 c0-0.55,0.22-1.09,0.64-1.46C18.09,13.95,19,12.08,19,10C19,6.13,15.87,3,12,3z M14,17h-4v-1h4V17z M10,19v-1h4v1H10z M15.31,13.74c-0.09,0.08-0.16,0.18-0.24,0.26H8.92c-0.08-0.09-0.15-0.19-0.24-0.27c-1.32-1.18-1.91-2.94-1.59-4.7 c0.36-1.94,1.96-3.55,3.89-3.93C11.32,5.03,11.66,5,12,5c2.76,0,5,2.24,5,5C17,11.43,16.39,12.79,15.31,13.74z');
        $l1I1->addChild($l2I0);
        $l0I1->addChild($l1I1);
        $l1I2 = new SVGGroup();
        $l2I0 = new SVGRect(x: '11.5', y: '11', width: '1', height: '3');
        $l1I2->addChild($l2I0);
        $l2I1 = new SVGRect(x: '10.59', y: '8.79', width: '1', height: '3');
        $l2I1->setAttribute('transform', 'matrix(0.7071 -0.7071 0.7071 0.7071 -4.0312 10.8536)');
        $l1I2->addChild($l2I1);
        $l2I2 = new SVGRect(x: '12.41', y: '8.79', width: '1', height: '3');
        $l2I2->setAttribute('transform', 'matrix(-0.7071 -0.7071 0.7071 -0.7071 14.7678 26.7028)');
        $l1I2->addChild($l2I2);
        $l0I1->addChild($l1I2);
        $doc->addChild($l0I1);
    }
}
