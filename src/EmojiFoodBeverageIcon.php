<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['social'],
    tags: ['beverage', 'coffee', 'cup', 'drink', 'emoji', 'mug', 'plate', 'set', 'tea'],
)]
final class EmojiFoodBeverageIcon extends SvgIcon
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
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M20,3H9v2.4l1.81,1.45C10.93,6.94,11,7.09,11,7.24v4.26c0,0.28-0.22,0.5-0.5,0.5h-4C6.22,12,6,11.78,6,11.5V7.24 c0-0.15,0.07-0.3,0.19-0.39L8,5.4V3H4v10c0,2.21,1.79,4,4,4h6c2.21,0,4-1.79,4-4v-3h2c1.11,0,2-0.9,2-2V5C22,3.89,21.11,3,20,3z M20,8h-2V5h2V8z');
        $l1I1->addChild($l2I0);
        $l2I1 = new SVGRect(x: '4', y: '19', width: '16', height: '2');
        $l1I1->addChild($l2I1);
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
