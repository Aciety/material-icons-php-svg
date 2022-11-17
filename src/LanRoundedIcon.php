<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['computer', 'connection', 'data', 'internet', 'lan', 'network', 'service'],
)]
final class LanRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M15,22h4c1.1,0,2-0.9,2-2v-3c0-1.1-0.9-2-2-2h-1v-2c0-1.1-0.9-2-2-2h-3V9h1c1.1,0,2-0.9,2-2V4c0-1.1-0.9-2-2-2h-4 C8.9,2,8,2.9,8,4v3c0,1.1,0.9,2,2,2h1v2H8c-1.1,0-2,0.9-2,2v2H5c-1.1,0-2,0.9-2,2v3c0,1.1,0.9,2,2,2h4c1.1,0,2-0.9,2-2v-3 c0-1.1-0.9-2-2-2H8v-2h8v2h-1c-1.1,0-2,0.9-2,2v3C13,21.1,13.9,22,15,22z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
