<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

final class BlurOnTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGCircle(cx: '14', cy: '10', r: '1.5');
        $doc->addChild($l0I1);
        $l0I2 = new SVGCircle(cx: '14', cy: '18', r: '1');
        $doc->addChild($l0I2);
        $l0I3 = new SVGCircle(cx: '14', cy: '14', r: '1.5');
        $doc->addChild($l0I3);
        $l0I4 = new SVGCircle(cx: '14', cy: '6', r: '1');
        $doc->addChild($l0I4);
        $l0I5 = new SVGPath(d: 'M3 9.5c-.28 0-.5.22-.5.5s.22.5.5.5.5-.22.5-.5-.22-.5-.5-.5zM14.5 3c0-.28-.22-.5-.5-.5s-.5.22-.5.5.22.5.5.5.5-.22.5-.5zM21 14.5c.28 0 .5-.22.5-.5s-.22-.5-.5-.5-.5.22-.5.5.22.5.5.5z');
        $doc->addChild($l0I5);
        $l0I6 = new SVGCircle(cx: '18', cy: '18', r: '1');
        $doc->addChild($l0I6);
        $l0I7 = new SVGPath(d: 'M13.5 21c0 .28.22.5.5.5s.5-.22.5-.5-.22-.5-.5-.5-.5.22-.5.5zM21 10.5c.28 0 .5-.22.5-.5s-.22-.5-.5-.5-.5.22-.5.5.22.5.5.5z');
        $doc->addChild($l0I7);
        $l0I8 = new SVGCircle(cx: '18', cy: '14', r: '1');
        $doc->addChild($l0I8);
        $l0I9 = new SVGCircle(cx: '18', cy: '6', r: '1');
        $doc->addChild($l0I9);
        $l0I10 = new SVGCircle(cx: '6', cy: '18', r: '1');
        $doc->addChild($l0I10);
        $l0I11 = new SVGCircle(cx: '6', cy: '14', r: '1');
        $doc->addChild($l0I11);
        $l0I12 = new SVGPath(d: 'M3.5 14c0-.28-.22-.5-.5-.5s-.5.22-.5.5.22.5.5.5.5-.22.5-.5z');
        $doc->addChild($l0I12);
        $l0I13 = new SVGCircle(cx: '10', cy: '6', r: '1');
        $doc->addChild($l0I13);
        $l0I14 = new SVGCircle(cx: '6', cy: '10', r: '1');
        $doc->addChild($l0I14);
        $l0I15 = new SVGCircle(cx: '6', cy: '6', r: '1');
        $doc->addChild($l0I15);
        $l0I16 = new SVGPath(d: 'M9.5 21c0 .28.22.5.5.5s.5-.22.5-.5-.22-.5-.5-.5-.5.22-.5.5z');
        $doc->addChild($l0I16);
        $l0I17 = new SVGCircle(cx: '10', cy: '18', r: '1');
        $doc->addChild($l0I17);
        $l0I18 = new SVGPath(d: 'M10.5 3c0-.28-.22-.5-.5-.5s-.5.22-.5.5.22.5.5.5.5-.22.5-.5z');
        $doc->addChild($l0I18);
        $l0I19 = new SVGCircle(cx: '10', cy: '14', r: '1.5');
        $doc->addChild($l0I19);
        $l0I20 = new SVGCircle(cx: '10', cy: '10', r: '1.5');
        $doc->addChild($l0I20);
        $l0I21 = new SVGCircle(cx: '18', cy: '10', r: '1');
        $doc->addChild($l0I21);
    }
}
