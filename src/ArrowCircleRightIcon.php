<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['arrow', 'circle', 'direction', 'navigation', 'right'],
)]
final class ArrowCircleRightIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M22,12c0-5.52-4.48-10-10-10S2,6.48,2,12c0,5.52,4.48,10,10,10S22,17.52,22,12z M12,13l-4,0v-2l4,0V8l4,4l-4,4V13z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
