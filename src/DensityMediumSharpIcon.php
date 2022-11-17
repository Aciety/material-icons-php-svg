<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['density', 'horizontal', 'lines', 'medium', 'rule', 'rules'],
)]
final class DensityMediumSharpIcon extends SVG
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
        $l2I0 = new SVGRect(x: '3', y: '3', width: '18', height: '2');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '3', y: '19', width: '18', height: '2');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '3', y: '11', width: '18', height: '2');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
