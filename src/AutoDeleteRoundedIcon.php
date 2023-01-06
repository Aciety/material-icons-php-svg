<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['alert'],
    tags: ['auto', 'bin', 'can', 'clock', 'date', 'delete', 'garbage', 'remove', 'schedule', 'time', 'trash'],
)]
final class AutoDeleteRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M16,9c-0.7,0-1.37,0.1-2,0.29V7c0-1.1-0.9-2-2-2H4C2.9,5,2,5.9,2,7v10c0,1.1,0.9,2,2,2h5.68c1.12,2.36,3.53,4,6.32,4 c3.87,0,7-3.13,7-7C23,12.13,19.87,9,16,9z M16,21c-2.76,0-5-2.24-5-5s2.24-5,5-5s5,2.24,5,5S18.76,21,16,21z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M14,4c0.55,0,1-0.45,1-1c0-0.55-0.45-1-1-1h-2.5l-0.71-0.71C10.61,1.11,10.35,1,10.09,1H5.91C5.65,1,5.39,1.11,5.21,1.29 L4.5,2H2C1.45,2,1,2.45,1,3c0,0.55,0.45,1,1,1H14z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M15.75,12L15.75,12C15.34,12,15,12.34,15,12.75v3.68c0,0.36,0.19,0.68,0.5,0.86l2.52,1.47c0.33,0.19,0.75,0.09,0.96-0.22 v0c0.23-0.34,0.12-0.81-0.24-1.02L16.5,16.2v-3.45C16.5,12.34,16.16,12,15.75,12z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
