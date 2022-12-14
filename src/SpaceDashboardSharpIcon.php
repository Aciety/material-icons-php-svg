<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['action'],
    tags: ['cards', 'dashboard', 'format', 'grid', 'layout', 'rectangle', 'shapes', 'space', 'squares', 'web', 'website'],
)]
final class SpaceDashboardSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M11,21H3V3h8V21z M13,21h8v-9h-8V21z M21,10V3h-8v7H21z');
        $doc->addChild($l0I1);
    }
}
