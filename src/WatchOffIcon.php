<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['hardware'],
    tags: ['Android', 'OS', 'ar', 'clock', 'close', 'gadget', 'iOS', 'off', 'shut', 'time', 'vr', 'watch', 'wearables', 'web', 'wristwatch'],
)]
final class WatchOffIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M12,7c2.76,0,5,2.24,5,5c0,0.64-0.13,1.25-0.35,1.82l1.5,1.5C18.69,14.33,19,13.2,19,12c0-2.22-1.03-4.19-2.64-5.47L15,2 H9L8.04,5.21l2.14,2.14C10.75,7.13,11.36,7,12,7z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M2.81,2.81L1.39,4.22l4.46,4.46C5.31,9.67,5,10.8,5,12c0,2.22,1.03,4.19,2.64,5.47L9,22h6l0.96-3.21l3.82,3.82l1.41-1.41 L2.81,2.81z M12,17c-2.76,0-5-2.24-5-5c0-0.64,0.13-1.25,0.35-1.82l6.47,6.47C13.25,16.87,12.64,17,12,17z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
