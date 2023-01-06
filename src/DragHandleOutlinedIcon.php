<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['app', 'application ui', 'components', 'design', 'drag', 'handle', 'interface', 'layout', 'menu', 'move', 'screen', 'site', 'ui', 'ux', 'web', 'website', 'window'],
)]
final class DragHandleOutlinedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20 9H4v2h16V9zM4 15h16v-2H4v2z');
        $doc->addChild($l0I1);
    }
}
