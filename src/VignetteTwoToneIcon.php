<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['image'],
    tags: ['border', 'edit', 'editing', 'filter', 'gradient', 'image', 'photo', 'photography', 'setting', 'vignette'],
)]
final class VignetteTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M3 19h18V5H3v14zm9-13c4.42 0 8 2.69 8 6s-3.58 6-8 6-8-2.69-8-6 3.58-6 8-6z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M21 3H3c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H3V5h18v14zm-9-1c4.42 0 8-2.69 8-6s-3.58-6-8-6-8 2.69-8 6 3.58 6 8 6zm0-10c3.25 0 6 1.83 6 4s-2.75 4-6 4-6-1.83-6-4 2.75-4 6-4z');
        $doc->addChild($l0I2);
    }
}
