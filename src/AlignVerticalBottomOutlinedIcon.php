<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['align', 'alignment', 'bottom', 'format', 'layout', 'lines', 'paragraph', 'rule', 'rules', 'style', 'text', 'vertical'],
)]
final class AlignVerticalBottomOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M22,22H2v-2h20V22z M10,2H7v16h3V2z M17,8h-3v10h3V8z');
        $doc->addChild($l0I1);
    }
}
