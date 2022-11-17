<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['content'],
    tags: ['archive', 'box', 'clipboard', 'doc', 'document', 'file', 'inventory', 'organize', 'packages', 'product', 'stock', 'supply'],
)]
final class InventoryTwoToneIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M21,11.5l1.5,1.5l-6.99,7L11,15.5l1.5-1.5l3.01,3L21,11.5z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGGroup();
        $l3I0 = new SVGPolygon(points: [[17, 5], [17, 8], [7, 8], [7, 5], [5, 5], [5, 19], [11.68, 19], [8.17, 15.5], [12.5, 11.17], [15.51, 14.17], [19, 10.67], [19, 5]]);
        $l3I0->setStyle('enable-background', 'new');
        $l3I0->setStyle('opacity', '.3');
        $l2I1->addChild($l3I0);
        $l3I1 = new SVGPath(d: 'M5,19V5h2v3h10V5h2v5.67l2-2l0,0V5c0-1.1-0.9-2-2-2h-4.18C14.4,1.84,13.3,1,12,1S9.6,1.84,9.18,3H5C3.9,3,3,3.9,3,5v14 c0,1.1,0.9,2,2,2h8.68l-2-2H5z M12,3c0.55,0,1,0.45,1,1s-0.45,1-1,1s-1-0.45-1-1S11.45,3,12,3z');
        $l2I1->addChild($l3I1);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
