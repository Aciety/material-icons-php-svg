<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['action'],
    tags: ['cards', 'carousel', 'day', 'design', 'format', 'grid', 'layout', 'view', 'website'],
)]
final class ViewDaySharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M2 21h19v-3H2v3zM21 8H2v8h19V8zM2 3v3h19V3H2z');
        $doc->addChild($l0I1);
    }
}
