<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['editor'],
    tags: [],
)]
final class TypeSpecimenOutlinedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M4,6H2v14c0,1.1,0.9,2,2,2h14v-2H4V6z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M20,2H8C6.9,2,6,2.9,6,4v12c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V4C22,2.9,21.1,2,20,2z M20,16H8V4h12V16z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M12.19,12.2h3.63l0.8,2.3h1.56l-3.38-9H13.2l-3.38,9h1.56L12.19,12.2z M13.96,7.17h0.08l1.31,3.72h-2.69L13.96,7.17z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
