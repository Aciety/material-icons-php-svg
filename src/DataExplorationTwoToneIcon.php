<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['action'],
    tags: ['analytics', 'arrow', 'chart', 'data', 'diagram', 'exploration', 'graph', 'infographic', 'measure', 'metrics', 'statistics', 'tracking'],
)]
final class DataExplorationTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12,20c-2.89,0-5.43-1.54-6.83-3.84l2.95-2.95L11.41,16L16,11.42V13h2V8h-5v2h1.58l-3.28,3.28L8,10.5 l-3.69,3.7C4.11,13.5,4,12.76,4,12c0-4.41,3.59-8,8-8s8,3.59,8,8S16.41,20,12,20z M19.5,20.5c-0.55,0-1-0.45-1-1s0.45-1,1-1 s1,0.45,1,1S20.05,20.5,19.5,20.5z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10h8c1.1,0,2-0.9,2-2v-8C22,6.48,17.52,2,12,2z M12,20c-2.89,0-5.43-1.54-6.83-3.84 l2.95-2.95L11.41,16L16,11.42V13h2V8h-5v2h1.58l-3.28,3.28L8,10.5l-3.69,3.7C4.11,13.5,4,12.76,4,12c0-4.41,3.59-8,8-8s8,3.59,8,8 S16.41,20,12,20z M19.5,20.5c-0.55,0-1-0.45-1-1s0.45-1,1-1s1,0.45,1,1S20.05,20.5,19.5,20.5z');
        $doc->addChild($l0I2);
    }
}
