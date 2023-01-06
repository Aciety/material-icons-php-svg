<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['places'],
    tags: ['baby', 'care', 'carriage', 'child', 'children', 'infant', 'kid', 'newborn', 'stroller', 'toddler', 'young'],
)]
final class StrollerIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGCircle(cx: '16', cy: '20', r: '2');
        $l1I1->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '6', cy: '20', r: '2');
        $l1I1->addChild($l2I1);
        $l0I0->addChild($l1I1);
        $l1I2 = new SVGPath(d: 'M22,7V6.48C22,4.56,20.52,3,18.65,3c-1.66,0-2.54,1.27-3.18,2.03l-8.8,10.32C6.12,16,6.58,17,7.43,17L15,17 c1.1,0,2-0.9,2-2V6.27C17.58,5.59,17.97,5,18.65,5C19.42,5,20,5.66,20,6.48V7H22z');
        $l0I0->addChild($l1I2);
        $l1I3 = new SVGPath(d: 'M14.3,4.1C13.03,3.4,11.56,3,10,3C8.03,3,6.21,3.64,4.72,4.72l4.89,4.89L14.3,4.1z');
        $l0I0->addChild($l1I3);
        $doc->addChild($l0I0);
    }
}
