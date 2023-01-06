<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['content'],
    tags: ['layer', 'live', 'mail_outline', 'multiple', 'post', 'refresh', 'update'],
)]
final class DynamicFeedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M8,8H6v7c0,1.1,0.9,2,2,2h9v-2H8V8z');
        $l1I1->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M20,3h-8c-1.1,0-2,0.9-2,2v6c0,1.1,0.9,2,2,2h8c1.1,0,2-0.9,2-2V5C22,3.9,21.1,3,20,3z M20,11h-8V7h8V11z');
        $l1I1->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M4,12H2v7c0,1.1,0.9,2,2,2h9v-2H4V12z');
        $l1I1->addChild($l2I2);
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
        $l0I2 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l1I0->setStyle('display', 'inline');
        $l0I2->addChild($l1I0);
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M8,8H6v7c0,1.1,0.9,2,2,2h9v-2H8V8z');
        $l1I1->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M20,3h-8c-1.1,0-2,0.9-2,2v6c0,1.1,0.9,2,2,2h8c1.1,0,2-0.9,2-2V5C22,3.9,21.1,3,20,3z M20,11h-8V7h8V11z');
        $l1I1->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M4,12H2v7c0,1.1,0.9,2,2,2h9v-2H4V12z');
        $l1I1->addChild($l2I2);
        $l1I1->setStyle('display', 'inline');
        $l0I2->addChild($l1I1);
        $l0I2->setStyle('display', 'none');
        $doc->addChild($l0I2);
    }
}
