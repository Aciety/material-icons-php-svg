<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['device'],
    tags: ['Android', 'OS', 'arrow', 'device', 'hardware', 'iOS', 'mobile', 'phone', 'rotate', 'rotation', 'screen', 'tablet', 'turn'],
)]
final class ScreenRotationSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M16.48 2.52c3.27 1.55 5.61 4.72 5.97 8.48h1.5C23.44 4.84 18.29 0 12 0l-.66.03 3.81 3.81 1.33-1.32zM7.52 21.48C4.25 19.94 1.91 16.76 1.55 13H.05C.56 19.16 5.71 24 12 24l.66-.03-3.81-3.81-1.33 1.32zM9.17.69L.69 9.17l14.14 14.14 8.48-8.48L9.17.69zm5.66 20.5L2.81 9.17l6.36-6.36 12.02 12.02-6.36 6.36z');
        $doc->addChild($l0I1);
    }
}
