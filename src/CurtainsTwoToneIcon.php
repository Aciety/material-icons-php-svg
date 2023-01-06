<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['home'],
    tags: ['blinds', 'cover', 'curtains', 'nest', 'open', 'shade', 'shutter', 'sunshade'],
)]
final class CurtainsTwoToneIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M6,13.14V19h3.94C9.64,16.07,8.05,13.73,6,13.14z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M9.94,5H6v5.86C8.05,10.27,9.64,7.93,9.94,5z');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M14.06,19H18v-5.86C15.95,13.73,14.36,16.07,14.06,19z');
        $l2I2->setStyle('opacity', '.3');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M18,10.86V5h-3.94C14.36,7.93,15.95,10.27,18,10.86z');
        $l2I3->setStyle('opacity', '.3');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M20,19V3H4v16H2v2h20v-2H20z M6,5h3.94C9.64,7.93,8.05,10.27,6,10.86V5z M6,19v-5.86c2.05,0.58,3.64,2.93,3.94,5.86H6z M11.95,19c-0.26-3.06-1.72-5.65-3.76-7c2.04-1.35,3.5-3.94,3.76-7h0.09c0.26,3.06,1.72,5.65,3.76,7c-2.04,1.35-3.5,3.94-3.76,7 H11.95z M18,19h-3.94c0.3-2.93,1.89-5.27,3.94-5.86V19z M18,10.86c-2.05-0.58-3.64-2.93-3.94-5.86H18V10.86z');
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
