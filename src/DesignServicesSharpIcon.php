<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class DesignServicesSharpIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M21.79,17.06l-5.55-5.55l1.57-1.57l-3.75-3.75l-1.57,1.57L6.94,2.21L2.21,6.94l5.55,5.55L3,17.25V21h3.75l4.76-4.76 l5.55,5.55l0,0v0L21.79,17.06z M9.18,11.07L5.04,6.94l1.9-1.9l1.27,1.27L7.02,7.5l1.41,1.41l1.19-1.19l1.45,1.45L9.18,11.07z M12.93,14.82l1.9-1.9l1.45,1.45l-1.19,1.19l1.41,1.41l1.19-1.19l1.27,1.27l-1.9,1.9L12.93,14.82z');
        $l1I1->addChild($l2I0);
        $l2I1 = new SVGRect(x: '16.48', y: '3.08', width: '3.59', height: '5.3');
        $l2I1->setAttribute('transform', 'matrix(0.7071 -0.7071 0.7071 0.7071 1.302 14.5981)');
        $l1I1->addChild($l2I1);
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
