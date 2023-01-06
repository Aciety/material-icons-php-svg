<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['content'],
    tags: ['attribute', 'attribution', 'body', 'copyright', 'copywriter', 'human', 'people', 'person'],
)]
final class AttributionIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M12,8.5c-0.91,0-2.75,0.46-2.75,1.38v4.62h1.5V19h2.5v-4.5h1.5V9.88C14.75,8.97,12.91,8.5,12,8.5z');
        $l2I0->addChild($l3I0);
        $l3I1 = new SVGPath(d: 'M12,2C6.47,2,2,6.47,2,12s4.47,10,10,10s10-4.48,10-10S17.52,2,12,2z M12,20c-4.42,0-8-3.58-8-8s3.58-8,8-8s8,3.58,8,8 S16.42,20,12,20z');
        $l2I0->addChild($l3I1);
        $l3I2 = new SVGCircle(cx: '12', cy: '6.5', r: '1.5');
        $l2I0->addChild($l3I2);
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
