<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['90', 'arrow', 'arrows', 'ccw', 'degrees', 'direction', 'edit', 'editing', 'image', 'photo', 'rotate', 'turn'],
)]
final class Rotate90DegreesCwTwoToneIcon extends SVG
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
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M4.64,19.37c3.03,3.03,7.67,3.44,11.15,1.25l-1.46-1.46c-2.66,1.43-6.04,1.03-8.28-1.21c-2.73-2.73-2.73-7.17,0-9.9 C7.42,6.69,9.21,6.03,11,6.03V9l4-4l-4-4v3.01c-2.3,0-4.61,0.87-6.36,2.63C1.12,10.15,1.12,15.85,4.64,19.37z M11,13l6,6l6-6 l-6-6L11,13z M17,16.17L13.83,13L17,9.83L20.17,13L17,16.17z');
        $l2I0->addChild($l3I0);
        $l3I1 = new SVGRect(x: '14.75', y: '10.75', width: '4.49', height: '4.49');
        $l3I1->setAttribute('transform', 'matrix(0.7071 -0.7071 0.7071 0.7071 -4.2138 15.8229)');
        $l3I1->setStyle('enable-background', 'new');
        $l3I1->setStyle('opacity', '.3');
        $l2I0->addChild($l3I1);
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
