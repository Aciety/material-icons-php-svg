<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['disabled', 'enabled', 'off', 'on', 'paper', 'print', 'printer', 'slash'],
)]
final class PrintDisabledTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M7 10H5c-.55 0-1 .45-1 1v4h2v-2h4l-3-3z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M1.41 1.6L0 3.01 5 8c-1.66 0-3 1.34-3 3v6h4v4h12l2.95 2.96 1.41-1.41L1.41 1.6zM6 15H4v-4c0-.55.45-1 1-1h2l3 3H6v2zm2 4v-4h4l4 4H8z');
        $doc->addChild($l0I2);
        $l0I3 = new SVGPath(d: 'M18 15.01l2-.01v-4c0-.55-.45-1-1-1h-6.34l3 3H18v2.01zm-1-3.5c0-.55.45-1 1-1s1 .45 1 1-.45 1-1 1-1-.45-1-1z');
        $l0I3->setStyle('opacity', '.3');
        $doc->addChild($l0I3);
        $l0I4 = new SVGCircle(cx: '18', cy: '11.51', r: '1');
        $doc->addChild($l0I4);
        $l0I5 = new SVGPath(d: 'M16 5H8v.35L10.66 8H16z');
        $l0I5->setStyle('opacity', '.3');
        $doc->addChild($l0I5);
        $l0I6 = new SVGPath(d: 'M19 8h-1V3H6v.36l2 2V5h8v3h-5.34l2 2H19c.55 0 1 .45 1 1v4l-2 .01V13h-2.34l4 4H22v-6c0-1.66-1.34-3-3-3z');
        $doc->addChild($l0I6);
    }
}
