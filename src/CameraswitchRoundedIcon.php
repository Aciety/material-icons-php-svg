<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['arrows', 'camera', 'cameraswitch', 'flip', 'rotate', 'swap', 'switch', 'view'],
)]
final class CameraswitchRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M16,7h-1l-1-1h-4L9,7H8C6.9,7,6,7.9,6,9v6c0,1.1,0.9,2,2,2h8c1.1,0,2-0.9,2-2V9C18,7.9,17.1,7,16,7z M12,14 c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2s2,0.9,2,2C14,13.1,13.1,14,12,14z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M9.45,0.28C9.05,0.36,8.9,0.84,9.19,1.12l3.01,3.01c0.32,0.31,0.85,0.09,0.85-0.35V2.04c4.45,0.44,8.06,3.82,8.84,8.17 c0.08,0.46,0.5,0.78,0.97,0.78c0.62,0,1.09-0.57,0.98-1.18C22.61,2.89,15.79-1.12,9.45,0.28z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M11.8,19.87c-0.32-0.32-0.85-0.09-0.85,0.35v1.74c-4.45-0.44-8.06-3.82-8.84-8.17c-0.08-0.46-0.5-0.78-0.97-0.78 c-0.62,0-1.09,0.57-0.98,1.18c1.24,6.92,8.06,10.93,14.4,9.53c0.39-0.09,0.55-0.56,0.26-0.85L11.8,19.87z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
