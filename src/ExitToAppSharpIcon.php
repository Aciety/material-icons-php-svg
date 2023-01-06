<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['action'],
    tags: ['app', 'application', 'arrow', 'components', 'design', 'exit', 'export', 'interface', 'layout', 'leave', 'mobile', 'monitor', 'move', 'output', 'phone', 'screen', 'site', 'tablet', 'to', 'ui', 'ux', 'web', 'website', 'window'],
)]
final class ExitToAppSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M10.09 15.59L11.5 17l5-5-5-5-1.41 1.41L12.67 11H3v2h9.67l-2.58 2.59zM21 3H3v6h2V5h14v14H5v-4H3v6h18V3z');
        $doc->addChild($l0I1);
    }
}
