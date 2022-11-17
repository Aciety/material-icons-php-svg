<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['arrows', 'camera', 'cameraswitch', 'flip', 'rotate', 'swap', 'switch', 'view'],
)]
final class CameraswitchTwoToneIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M13.17,8h-2.34l-1,1H8v6h8V9h-1.83L13.17,8z M12,14c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2s2,0.9,2,2 C14,13.1,13.1,14,12,14z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M16,7h-1l-1-1h-4L9,7H8C6.9,7,6,7.9,6,9v6c0,1.1,0.9,2,2,2h8c1.1,0,2-0.9,2-2V9C18,7.9,17.1,7,16,7z M16,15H8V9h1.83l1-1 h2.34l1,1H16V15z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGCircle(cx: '12', cy: '12', r: '2');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M8.57,0.52L13.05,5V2.05C17.77,2.52,21.53,6.28,22,11c0,0,2,0,2,0C23.34,3.03,15.49-1.58,8.57,0.52z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M10.95,21.96C6.23,21.49,2.47,17.73,2,13.01c0,0-2,0-2,0c0.66,7.97,8.51,12.58,15.43,10.48l-4.48-4.48V21.96z');
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
