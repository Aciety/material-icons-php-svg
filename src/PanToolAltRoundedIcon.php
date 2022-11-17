<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['fingers', 'gesture', 'hand', 'hands', 'human', 'move', 'pan', 'scan', 'stop', 'tool'],
)]
final class PanToolAltRoundedIcon extends SVG
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
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M5.2,15.43c0-0.65,0.6-1.13,1.24-0.99L10,15.24V4.5C10,3.67,10.67,3,11.5,3S13,3.67,13,4.5v6h0.91 c0.31,0,0.62,0.07,0.89,0.21l4.09,2.04c0.77,0.38,1.21,1.22,1.09,2.07l-0.63,4.46C19.21,20.27,18.36,21,17.37,21h-6.16 c-0.53,0-1.29-0.21-1.66-0.59l-4.07-4.29C5.3,15.94,5.2,15.69,5.2,15.43z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
