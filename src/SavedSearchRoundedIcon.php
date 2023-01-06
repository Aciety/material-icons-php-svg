<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['find', 'glass', 'important', 'look', 'magnify', 'magnifying', 'marked', 'saved', 'search', 'see', 'star'],
)]
final class SavedSearchRoundedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M14.73,13.31c1.13-1.55,1.63-3.58,0.98-5.74c-0.68-2.23-2.57-3.98-4.85-4.44C6.21,2.2,2.2,6.22,3.14,10.86 c0.46,2.29,2.21,4.18,4.44,4.85c2.16,0.65,4.19,0.15,5.74-0.98l5.56,5.56c0.39,0.39,1.02,0.39,1.41,0l0,0 c0.39-0.39,0.39-1.02,0-1.41L14.73,13.31z M9.5,14C7.01,14,5,11.99,5,9.5S7.01,5,9.5,5S14,7.01,14,9.5S11.99,14,9.5,14z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[10.29, 8.44], [9.5, 6], [8.710000000000001, 8.44], [6.25, 8.44], [8.26, 10.03], [7.49, 12.5], [9.5, 10.97], [11.51, 12.5], [10.74, 10.03], [12.75, 8.44]]);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
