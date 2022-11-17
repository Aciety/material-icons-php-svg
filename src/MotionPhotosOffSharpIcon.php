<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['animation', 'circle', 'disabled', 'enabled', 'motion', 'off', 'on', 'photos', 'slash', 'video'],
)]
final class MotionPhotosOffSharpIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M12,6c-0.92,0-1.8,0.22-2.58,0.59l7.99,7.99C17.78,13.8,18,12.92,18,12C18,8.69,15.31,6,12,6z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M2.81,2.81L1.39,4.22l2.27,2.27C2.61,8.07,2,9.96,2,12c0,5.52,4.48,10,10,10c2.04,0,3.93-0.61,5.51-1.66l2.27,2.27 l1.41-1.42L2.81,2.81z M12,20c-4.41,0-8-3.59-8-8c0-1.48,0.41-2.86,1.12-4.06l1.47,1.47C6.22,10.2,6,11.08,6,12c0,3.31,2.69,6,6,6 c0.92,0,1.8-0.22,2.58-0.59l1.47,1.47C14.86,19.59,13.48,20,12,20z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M12,4c4.41,0,8,3.59,8,8c0,1.48-0.41,2.86-1.12,4.05l1.45,1.45C21.39,15.93,22,14.04,22,12c0-5.52-4.48-10-10-10 C9.96,2,8.07,2.61,6.49,3.66l1.45,1.45C9.14,4.41,10.52,4,12,4z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
