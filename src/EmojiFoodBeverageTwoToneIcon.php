<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['beverage', 'coffee', 'cup', 'drink', 'emoji', 'mug', 'plate', 'set', 'tea'],
)]
final class EmojiFoodBeverageTwoToneIcon extends SVG
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
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M10,6.4l1.81,1.45C11.93,7.94,12,8.09,12,8.24v4.26c0,0.28-0.22,0.5-0.5,0.5h-4C7.22,13,7,12.78,7,12.5 V8.24c0-0.15,0.07-0.3,0.19-0.39L9,6.4V5H6v8c0,1.1,0.9,2,2,2h6c1.1,0,2-0.9,2-2V5h-6V6.4z');
        $l2I0->setStyle('opacity', '.3');
        $l1I1->addChild($l2I0);
        $l2I1 = new SVGRect(x: '2', y: '19', width: '18', height: '2');
        $l1I1->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M20,3H4v10c0,2.21,1.79,4,4,4h6c2.21,0,4-1.79,4-4v-3h2c1.11,0,2-0.89,2-2V5C22,3.89,21.11,3,20,3z M9.5,7.28l1.5,1.2V12 H8V8.48L9.5,7.28z M16,13c0,1.1-0.9,2-2,2H8c-1.1,0-2-0.9-2-2V5h3v1.4L7.19,7.85C7.07,7.94,7,8.09,7,8.24v4.26 C7,12.78,7.22,13,7.5,13h4c0.28,0,0.5-0.22,0.5-0.5V8.24c0-0.15-0.07-0.3-0.19-0.39L10,6.4V5h6V13z M20,8h-2V5h2V8z');
        $l1I1->addChild($l2I2);
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
