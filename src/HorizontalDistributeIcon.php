<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['alignment', 'distribute', 'format', 'horizontal', 'layout', 'lines', 'paragraph', 'rule', 'rules', 'style', 'text'],
)]
final class HorizontalDistributeIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M4,22H2V2h2V22z M22,2h-2v20h2V2z M13.5,7h-3v10h3V7z');
        $doc->addChild($l0I1);
    }
}
