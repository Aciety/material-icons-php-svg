<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['action'],
    tags: ['all', 'circle', 'out', 'shape'],
)]
final class AllOutRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M4 4.5V8l4-4H4.5c-.28 0-.5.22-.5.5zM16 4l4 4V4.5c0-.28-.22-.5-.5-.5H16zm4 15.5V16l-4 4h3.5c.28 0 .5-.22.5-.5zM4.5 20H8l-4-4v3.5c0 .28.22.5.5.5zM19 12c0-3.87-3.13-7-7-7s-7 3.13-7 7 3.13 7 7 7 7-3.13 7-7zm-7 5c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z');
        $doc->addChild($l0I1);
    }
}
