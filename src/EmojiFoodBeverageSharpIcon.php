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
final class EmojiFoodBeverageSharpIcon extends SvgIcon
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
        $l2I0 = new SVGRect(x: '2', y: '19', width: '18', height: '2');
        $l1I1->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M20,3H9v2.4L11,7v5H6V7l2-1.6V3H4v14h14v-7h2c1.1,0,2-0.9,2-2V5C22,3.9,21.1,3,20,3z M20,8h-2V5h2V8z');
        $l1I1->addChild($l2I1);
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
