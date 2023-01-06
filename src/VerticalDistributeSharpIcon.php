<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['alignment', 'distribute', 'format', 'layout', 'lines', 'paragraph', 'rule', 'rules', 'style', 'text', 'vertical'],
)]
final class VerticalDistributeSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M22,2v2H2V2H22z M7,10.5v3h10v-3H7z M2,20v2h20v-2H2z');
        $doc->addChild($l0I1);
    }
}
