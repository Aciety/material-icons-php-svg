<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['av'],
    tags: ['browser', 'internet', 'page', 'screen', 'site', 'web', 'website', 'www'],
)]
final class WebTwoToneIcon extends SVG
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
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $l1I2 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I2->setStyle('fill', 'none');
        $l0I0->addChild($l1I2);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGRect(x: '4', y: '9', width: '10.5', height: '3.5');
        $l2I0->setStyle('opacity', '.3');
        $l1I1->addChild($l2I0);
        $l2I1 = new SVGRect(x: '4', y: '14.5', width: '10.5', height: '3.5');
        $l2I1->setStyle('opacity', '.3');
        $l1I1->addChild($l2I1);
        $l2I2 = new SVGRect(x: '16.5', y: '9', width: '3.5', height: '9');
        $l2I2->setStyle('opacity', '.3');
        $l1I1->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M20,4H4C2.9,4,2.01,4.9,2.01,6L2,18c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V6C22,4.9,21.1,4,20,4z M14.5,18L4,18v-3.5h10.5 V18z M14.5,12.5H4V9h10.5V12.5z M20,18l-3.5,0V9H20V18z');
        $l1I1->addChild($l2I3);
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
