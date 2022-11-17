<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['islam', 'islamic', 'masjid', 'muslim', 'religion', 'spiritual', 'worship'],
)]
final class MosqueSharpIcon extends SVG
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M6.12,8C6,8,18,8,17.88,8');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M17.88,8C17.95,7.71,18,7.41,18,7.09c0-1.31-0.65-2.53-1.74-3.25L12,1L7.74,3.84C6.65,4.56,6,5.78,6,7.09 C6,7.41,6.05,7.71,6.12,8');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M24,7c0-1.1-2-3-2-3s-2,1.9-2,3c0,0.74,0.4,1.38,1,1.72V13h-2V9H5v4H3V8.72C3.6,8.38,4,7.74,4,7c0-1.1-2-3-2-3S0,5.9,0,7 c0,0.74,0.4,1.38,1,1.72V21h9v-6h4v6h9V8.72C23.6,8.38,24,7.74,24,7z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
