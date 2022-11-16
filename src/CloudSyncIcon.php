<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class CloudSyncIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M21.5,14.98c-0.02,0-0.03,0-0.05,0.01C21.2,13.3,19.76,12,18,12c-1.4,0-2.6,0.83-3.16,2.02C13.26,14.1,12,15.4,12,17 c0,1.66,1.34,3,3,3l6.5-0.02c1.38,0,2.5-1.12,2.5-2.5S22.88,14.98,21.5,14.98z M10,4.26v2.09C7.67,7.18,6,9.39,6,12 c0,1.77,0.78,3.34,2,4.44V14h2v6H4v-2h2.73C5.06,16.54,4,14.4,4,12C4,8.27,6.55,5.15,10,4.26z M20,6h-2.73 c1.43,1.26,2.41,3.01,2.66,5l-2.02,0C17.68,9.64,16.98,8.45,16,7.56V10h-2V4h6V6z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
