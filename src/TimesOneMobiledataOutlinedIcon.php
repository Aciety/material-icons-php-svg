<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['1x', 'alphabet', 'cellular', 'character', 'digit', 'font', 'letter', 'mobile', 'mobiledata', 'network', 'number', 'phone', 'signal', 'speed', 'symbol', 'text', 'type', 'wifi'],
)]
final class TimesOneMobiledataOutlinedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M4,7h4v10H6V9H4V7z M15.83,11.72L18.66,7h-2.33l-1.66,2.77L13,7h-2.33l2.83,4.72L10.33,17h2.33l2-3.34l2,3.34H19 L15.83,11.72z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
