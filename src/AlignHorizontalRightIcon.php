<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['align', 'alignment', 'format', 'horizontal', 'layout', 'lines', 'paragraph', 'right', 'rule', 'rules', 'style', 'text'],
)]
final class AlignHorizontalRightIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20,2h2v20h-2V2z M2,10h16V7H2V10z M8,17h10v-3H8V17z');
        $doc->addChild($l0I1);
    }
}
