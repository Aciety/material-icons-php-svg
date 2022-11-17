<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['alphabet', 'brackets', 'character', 'code', 'css', 'develop', 'developer', 'engineer', 'engineering', 'font', 'html', 'letter', 'platform', 'symbol', 'text', 'type'],
)]
final class CssSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M9.5,15v-2H11v0.5h2v-1H9.5V9h5v2H13v-0.5h-2v1h3.5V15H9.5z M16,15h5v-3.5h-3.5v-1h2V11H21V9h-5v3.5h3.5v1h-2V13H16V15z M8,11V9H3v6h5v-2H6.5v0.5h-2v-3h2V11H8z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
