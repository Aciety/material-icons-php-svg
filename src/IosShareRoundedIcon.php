<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['export', 'ios', 'send', 'share'],
)]
final class IosShareRoundedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M18,8h-2c-0.55,0-1,0.45-1,1v0c0,0.55,0.45,1,1,1h2v11H6V10h2c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1H6c-1.1,0-2,0.9-2,2 v11c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V10C20,8.9,19.1,8,18,8z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M12,16L12,16c0.55,0,1-0.45,1-1V5h1.79c0.45,0,0.67-0.54,0.35-0.85l-2.79-2.79c-0.2-0.2-0.51-0.2-0.71,0L8.85,4.15 C8.54,4.46,8.76,5,9.21,5H11v10C11,15.55,11.45,16,12,16z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
