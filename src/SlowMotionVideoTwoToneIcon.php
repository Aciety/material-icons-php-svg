<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['av'],
    tags: ['arrow', 'control', 'controls', 'motion', 'music', 'play', 'slow', 'speed', 'video'],
)]
final class SlowMotionVideoTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M4.26 18.32l1.43-1.43c-.86-1.1-1.44-2.43-1.62-3.89H2.05c.2 2.01 1 3.84 2.21 5.32zM7.1 5.69c1.11-.86 2.44-1.44 3.9-1.62V2.05c-2.01.2-3.84 1-5.32 2.21L7.1 5.69zM2.05 11h2.02c.18-1.46.76-2.79 1.62-3.9L4.26 5.68C3.05 7.16 2.25 8.99 2.05 11zm11-8.95v2.02C16.97 4.59 20 7.95 20 12s-3.03 7.41-6.95 7.93v2.02C18.08 21.42 22 17.16 22 12c0-5.16-3.92-9.42-8.95-9.95zM16 12l-2.95-2.21L10 7.5v9l3.05-2.29zM5.68 19.74C7.16 20.95 9 21.75 11 21.95v-2.02c-1.46-.18-2.79-.76-3.9-1.62l-1.42 1.43z');
        $doc->addChild($l0I1);
    }
}
