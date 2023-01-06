<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['navigation'],
    tags: [],
)]
final class AddHomeWorkIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M15,11.68V11L8,6l-7,5v10h5v-6h4v6h1.68C11.25,20.09,11,19.08,11,18C11,15.21,12.64,12.81,15,11.68z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M23,13.11V3H10v1.97l7,5v1.11c0.33-0.05,0.66-0.08,1-0.08C19.96,11,21.73,11.81,23,13.11z M17,7h2v2h-2V7z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M23,18c0-2.76-2.24-5-5-5s-5,2.24-5,5s2.24,5,5,5S23,20.76,23,18z M17.5,21v-2.5H15v-1h2.5V15h1v2.5H21v1h-2.5V21H17.5z');
        $l2I2->addChild($l3I0);
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
