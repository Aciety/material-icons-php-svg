<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['calendar', 'date', 'day', 'event', 'format', 'grid', 'layout', 'month', 'schedule', 'today', 'view'],
)]
final class CalendarViewMonthTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGRect(x: '4', y: '6', width: '4', height: '5');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '4', y: '13', width: '4', height: '5');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '10', y: '13', width: '4', height: '5');
        $l2I2->setStyle('opacity', '.3');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '16', y: '13', width: '4', height: '5');
        $l2I3->setStyle('opacity', '.3');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGRect(x: '16', y: '6', width: '4', height: '5');
        $l2I4->setStyle('opacity', '.3');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGRect(x: '10', y: '6', width: '4', height: '5');
        $l2I5->setStyle('opacity', '.3');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGPath(d: 'M20,4H4C2.9,4,2,4.9,2,6v12c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V6C22,4.9,21.1,4,20,4z M8,18H4v-5h4V18z M8,11H4V6h4V11z M14,18h-4v-5h4V18z M14,11h-4V6h4V11z M20,18h-4v-5h4V18z M20,11h-4V6h4V11z');
        $l1I0->addChild($l2I6);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
