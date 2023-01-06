<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['hardware'],
    tags: ['adf', 'document', 'feeder', 'machine', 'office', 'scan', 'scanner'],
)]
final class AdfScannerRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M19,12h-1V6c0-1.1-0.9-2-2-2H8C6.9,4,6,4.9,6,6v6H5c-1.66,0-3,1.34-3,3v3c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2v-3 C22,13.34,20.66,12,19,12z M16,12H8V6h8V12z M18,17c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1s1,0.45,1,1C19,16.55,18.55,17,18,17z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
