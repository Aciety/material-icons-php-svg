<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['app', 'application ui', 'components', 'design', 'drag', 'handle', 'interface', 'layout', 'menu', 'move', 'screen', 'site', 'ui', 'ux', 'web', 'website', 'window'],
)]
final class DragHandleSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M20 9H4v2h16V9zM4 15h16v-2H4v2z');
        $doc->addChild($l0I0);
    }
}
