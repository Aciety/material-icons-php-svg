<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['av'],
    tags: ['arrow', 'arrows', 'circle', 'control', 'controls', 'filled', 'music', 'refresh', 'renew', 'repeat', 'replay', 'video'],
)]
final class ReplayCircleFilledSharpIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10s10-4.48,10-10S17.52,2,12,2z M18,12.5c0,3.31-2.69,6-6,6s-6-2.69-6-6h2 c0,2.21,1.79,4,4,4s4-1.79,4-4s-1.79-4-4-4v3l-4-4l4-4v3C15.31,6.5,18,9.19,18,12.5z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
