<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['(scan)', '[cellular', 'connection', 'data', 'internet', 'lock', 'mobile]', 'network', 'password', 'secure', 'service', 'signal', 'wifi', 'wireless'],
)]
final class WifiPasswordOutlinedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M24,8.98l-2.12,2.13C19.35,8.57,15.85,7,12,7s-7.35,1.57-9.88,4.11L0,8.98C3.07,5.9,7.31,4,12,4S20.93,5.9,24,8.98z M4.24,13.22l2.12,2.12C7.8,13.9,9.8,13,12,13c2.2,0,4.2,0.9,5.64,2.35l2.12-2.12C17.78,11.23,15.03,10,12,10 C8.97,10,6.22,11.23,4.24,13.22z M24,20v3c0,0.55-0.45,1-1,1h-4c-0.55,0-1-0.45-1-1v-3c0-0.55,0.45-1,1-1v-1c0-1.1,0.9-2,2-2 s2,0.9,2,2v1C23.55,19,24,19.45,24,20z M22,18c0-0.55-0.45-1-1-1s-1,0.45-1,1v1h2V18z M12,16c-1.38,0-2.63,0.56-3.53,1.46L12,21 l3.53-3.54C14.63,16.56,13.38,16,12,16z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
