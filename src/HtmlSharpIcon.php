<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['alphabet', 'brackets', 'character', 'code', 'css', 'develop', 'developer', 'engineer', 'engineering', 'font', 'html', 'letter', 'platform', 'symbol', 'text', 'type'],
)]
final class HtmlSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M3.5,9H5v6H3.5v-2.5h-2V15H0V9h1.5v2h2V9z M18.5,9H12v6h1.5v-4.5h1V14H16v-3.51h1V15h1.5V9z M11,9H6v1.5h1.75V15h1.5v-4.5 H11V9z M24,15v-1.5h-2.5V9H20v6H24z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
