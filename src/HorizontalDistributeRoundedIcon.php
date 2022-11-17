<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['alignment', 'distribute', 'format', 'horizontal', 'layout', 'lines', 'paragraph', 'rule', 'rules', 'style', 'text'],
)]
final class HorizontalDistributeRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M3,22L3,22c-0.55,0-1-0.45-1-1V3c0-0.55,0.45-1,1-1h0c0.55,0,1,0.45,1,1v18C4,21.55,3.55,22,3,22z M21,2L21,2 c-0.55,0-1,0.45-1,1v18c0,0.55,0.45,1,1,1h0c0.55,0,1-0.45,1-1V3C22,2.45,21.55,2,21,2z M12,7L12,7c-0.83,0-1.5,0.67-1.5,1.5v7 c0,0.83,0.67,1.5,1.5,1.5h0c0.83,0,1.5-0.67,1.5-1.5v-7C13.5,7.67,12.83,7,12,7z');
        $doc->addChild($l0I1);
    }
}
