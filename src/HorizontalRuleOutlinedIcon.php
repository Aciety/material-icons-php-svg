<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['gmail', 'horizontal', 'line', 'novitas', 'rule'],
)]
final class HorizontalRuleOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l1I0->setStyle('fill-rule', 'evenodd');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGRect(x: '4', y: '11', width: '16', height: '2');
        $l2I0->setStyle('fill-rule', 'evenodd');
        $l1I1->addChild($l2I0);
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
