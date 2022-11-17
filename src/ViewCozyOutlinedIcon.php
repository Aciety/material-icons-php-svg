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
    tags: ['comfy', 'cozy', 'design', 'format', 'layout', 'view', 'web'],
)]
final class ViewCozyOutlinedIcon extends SVG
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
        $l2I0 = new SVGRect(x: '7.25', y: '7.25', width: '4', height: '4');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '12.75', y: '7.25', width: '4', height: '4');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '7.25', y: '12.75', width: '4', height: '4');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '12.75', y: '12.75', width: '4', height: '4');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M20,4H4C2.9,4,2,4.9,2,6v12c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V6C22,4.9,21.1,4,20,4z M20,18H4V6h16V18z');
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
