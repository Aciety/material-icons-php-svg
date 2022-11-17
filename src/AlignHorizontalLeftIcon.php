<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['align', 'alignment', 'format', 'horizontal', 'layout', 'left', 'lines', 'paragraph', 'rule', 'rules', 'style', 'text'],
)]
final class AlignHorizontalLeftIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M4,22H2V2h2V22z M22,7H6v3h16V7z M16,14H6v3h10V14z');
        $doc->addChild($l0I1);
    }
}
