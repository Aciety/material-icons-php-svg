<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['arrows', 'camera', 'cameraswitch', 'flip', 'rotate', 'swap', 'switch', 'view'],
)]
final class CameraswitchOutlinedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M16,7h-1l-1-1h-4L9,7H8C6.9,7,6,7.9,6,9v6c0,1.1,0.9,2,2,2h8c1.1,0,2-0.9,2-2V9C18,7.9,17.1,7,16,7z M16,15H8V9h1.83l1-1 h2.34l1,1H16V15z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '12', cy: '12', r: '2');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M8.57,0.52L13.05,5l1.41-1.41l-1.54-1.54C17.7,2.46,21.53,6.24,22,11h2C23.36,3.3,15.79-1.67,8.57,0.52z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M9.54,20.41l1.54,1.54C6.3,21.54,2.47,17.76,2,13H0c0.64,7.7,8.21,12.67,15.43,10.48L10.95,19L9.54,20.41z');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
