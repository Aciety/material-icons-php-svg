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
    tags: ['around', 'arrow', 'arrows', 'protected', 'rotate', 'setup', 'wifi'],
)]
final class WifiProtectedSetupRoundedIcon extends SVG
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M16.7,5.3l1.44-1.44c0.32-0.32,0.09-0.85-0.35-0.85H11.5c-0.28,0-0.5,0.22-0.5,0.5V9.8c0,0.45,0.54,0.67,0.85,0.35 l1.45-1.45c1.97,1.46,3.25,3.78,3.25,6.42c0,0.66-0.08,1.31-0.24,1.92c-0.12,0.5,0.48,0.86,0.84,0.49 c1.48-1.53,2.4-3.61,2.4-5.91C19.55,9.11,18.44,6.86,16.7,5.3z');
        $l2I0->addChild($l3I0);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M12.15,13.86L10.7,15.3c-1.97-1.46-3.25-3.78-3.25-6.42c0-0.66,0.08-1.31,0.24-1.92c0.12-0.5-0.48-0.86-0.84-0.49 c-1.48,1.53-2.4,3.61-2.4,5.91c0,2.52,1.1,4.77,2.84,6.33l-1.44,1.44c-0.32,0.32-0.09,0.85,0.35,0.85h6.29 c0.28,0,0.5-0.22,0.5-0.5v-6.29C13,13.77,12.46,13.54,12.15,13.86z');
        $l2I1->addChild($l3I0);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
