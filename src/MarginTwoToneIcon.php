<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['design', 'layout', 'margin', 'padding', 'size', 'square'],
)]
final class MarginTwoToneIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M5,19h14V5H5V19z M15,7h2v2h-2V7z M15,11h2v2h-2V11z M11,7h2v2h-2V7z M11,11h2v2h-2V11z M7,7h2v2H7V7z M7,11h2v2H7V11z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '7', y: '7', width: '2', height: '2');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '7', y: '11', width: '2', height: '2');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M3,3v18h18V3H3z M19,19H5V5h14V19z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGRect(x: '11', y: '7', width: '2', height: '2');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGRect(x: '15', y: '11', width: '2', height: '2');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGRect(x: '11', y: '11', width: '2', height: '2');
        $l1I0->addChild($l2I6);
        $l2I7 = new SVGRect(x: '15', y: '7', width: '2', height: '2');
        $l1I0->addChild($l2I7);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
