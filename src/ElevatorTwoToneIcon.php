<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['places'],
    tags: ['body', 'down', 'elevator', 'human', 'people', 'person', 'up'],
)]
final class ElevatorTwoToneIcon extends SVG
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
        $l1I1 = new SVGPath(d: 'M19,5v14H5V5H19 M10,18v-4h1v-2.5c0-1.1-0.9-2-2-2H8c-1.1,0-2,0.9-2,2V14h1v4H10z M8.5,8.5 c0.69,0,1.25-0.56,1.25-1.25S9.19,6,8.5,6S7.25,6.56,7.25,7.25S7.81,8.5,8.5,8.5z M18,11l-2.5-4L13,11H18z M13,13l2.5,4l2.5-4H13z');
        $l1I1->setStyle('opacity', '.3');
        $l0I0->addChild($l1I1);
        $l1I2 = new SVGPath(d: 'M19,5v14H5V5H19 M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3L19,3z M10,18v-4h1 v-2.5c0-1.1-0.9-2-2-2H8c-1.1,0-2,0.9-2,2V14h1v4H10z M8.5,8.5c0.69,0,1.25-0.56,1.25-1.25S9.19,6,8.5,6S7.25,6.56,7.25,7.25 S7.81,8.5,8.5,8.5z M18,11l-2.5-4L13,11H18z M13,13l2.5,4l2.5-4H13z');
        $l0I0->addChild($l1I2);
        $doc->addChild($l0I0);
    }
}
