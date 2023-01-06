<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['image'],
    tags: ['blur', 'dots', 'edit', 'editing', 'effect', 'enhance', 'filter', 'linear'],
)]
final class BlurLinearTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M17 16.5c.28 0 .5-.22.5-.5s-.22-.5-.5-.5-.5.22-.5.5.22.5.5.5z');
        $doc->addChild($l0I1);
        $l0I2 = new SVGCircle(cx: '9', cy: '12', r: '1');
        $doc->addChild($l0I2);
        $l0I3 = new SVGCircle(cx: '13', cy: '8', r: '1');
        $doc->addChild($l0I3);
        $l0I4 = new SVGCircle(cx: '13', cy: '16', r: '1');
        $doc->addChild($l0I4);
        $l0I5 = new SVGPath(d: 'M17 12.5c.28 0 .5-.22.5-.5s-.22-.5-.5-.5-.5.22-.5.5.22.5.5.5z');
        $doc->addChild($l0I5);
        $l0I6 = new SVGCircle(cx: '13', cy: '12', r: '1');
        $doc->addChild($l0I6);
        $l0I7 = new SVGPath(d: 'M3 3h18v2H3z');
        $doc->addChild($l0I7);
        $l0I8 = new SVGCircle(cx: '5', cy: '8', r: '1.5');
        $doc->addChild($l0I8);
        $l0I9 = new SVGCircle(cx: '5', cy: '12', r: '1.5');
        $doc->addChild($l0I9);
        $l0I10 = new SVGCircle(cx: '5', cy: '16', r: '1.5');
        $doc->addChild($l0I10);
        $l0I11 = new SVGPath(d: 'M17 8.5c.28 0 .5-.22.5-.5s-.22-.5-.5-.5-.5.22-.5.5.22.5.5.5z');
        $doc->addChild($l0I11);
        $l0I12 = new SVGCircle(cx: '9', cy: '16', r: '1');
        $doc->addChild($l0I12);
        $l0I13 = new SVGCircle(cx: '9', cy: '8', r: '1');
        $doc->addChild($l0I13);
        $l0I14 = new SVGPath(d: 'M3 19h18v2H3z');
        $doc->addChild($l0I14);
    }
}
