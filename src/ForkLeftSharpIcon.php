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
    tags: ['arrow', 'arrows', 'direction', 'directions', 'fork', 'left', 'maps', 'navigation', 'path', 'route', 'sign', 'traffic'],
)]
final class ForkLeftSharpIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M9.41,15.59L8,17l-4-4l4-4l1.41,1.41L7.83,12c1.51-0.33,3.73,0.08,5.17,1.36l0-6.53l-1.59,1.59L10,7l4-4l4,4l-1.41,1.41 L15,6.83V21l-2,0v-4c-0.73-2.58-3.07-3.47-5.17-3L9.41,15.59z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
