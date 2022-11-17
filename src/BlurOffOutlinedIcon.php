<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['blur', 'disabled', 'dots', 'edit', 'editing', 'effect', 'enabled', 'enhance', 'off', 'on', 'slash'],
)]
final class BlurOffOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGCircle(cx: '14', cy: '6', r: '1');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M13.8 11.48l.2.02c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5-1.5.67-1.5 1.5l.02.2c.09.67.61 1.19 1.28 1.28zM14 3.5c.28 0 .5-.22.5-.5s-.22-.5-.5-.5-.5.22-.5.5.22.5.5.5zm-4 0c.28 0 .5-.22.5-.5s-.22-.5-.5-.5-.5.22-.5.5.22.5.5.5z');
        $doc->addChild($l0I2);
        $l0I3 = new SVGCircle(cx: '18', cy: '10', r: '1');
        $doc->addChild($l0I3);
        $l0I4 = new SVGCircle(cx: '18', cy: '6', r: '1');
        $doc->addChild($l0I4);
        $l0I5 = new SVGPath(d: 'M21 10.5c.28 0 .5-.22.5-.5s-.22-.5-.5-.5-.5.22-.5.5.22.5.5.5z');
        $doc->addChild($l0I5);
        $l0I6 = new SVGCircle(cx: '10', cy: '6', r: '1');
        $doc->addChild($l0I6);
        $l0I7 = new SVGCircle(cx: '18', cy: '14', r: '1');
        $doc->addChild($l0I7);
        $l0I8 = new SVGCircle(cx: '6', cy: '18', r: '1');
        $doc->addChild($l0I8);
        $l0I9 = new SVGPath(d: 'M14 20.5c-.28 0-.5.22-.5.5s.22.5.5.5.5-.22.5-.5-.22-.5-.5-.5zm7-7c-.28 0-.5.22-.5.5s.22.5.5.5.5-.22.5-.5-.22-.5-.5-.5zm-18 0c-.28 0-.5.22-.5.5s.22.5.5.5.5-.22.5-.5-.22-.5-.5-.5z');
        $doc->addChild($l0I9);
        $l0I10 = new SVGCircle(cx: '10', cy: '18', r: '1');
        $doc->addChild($l0I10);
        $l0I11 = new SVGPath(d: 'M3 9.5c-.28 0-.5.22-.5.5s.22.5.5.5.5-.22.5-.5-.22-.5-.5-.5zm7 11c-.28 0-.5.22-.5.5s.22.5.5.5.5-.22.5-.5-.22-.5-.5-.5z');
        $doc->addChild($l0I11);
        $l0I12 = new SVGCircle(cx: '6', cy: '14', r: '1');
        $doc->addChild($l0I12);
        $l0I13 = new SVGPath(d: 'M2.5 5.27L6 8.77l.28.28L6 9c-.55 0-1 .45-1 1s.45 1 1 1 1-.45 1-1c0-.1-.03-.19-.06-.28l2.81 2.81c-.71.11-1.25.73-1.25 1.47 0 .83.67 1.5 1.5 1.5.74 0 1.36-.54 1.47-1.25l2.81 2.81c-.09-.03-.18-.06-.28-.06-.55 0-1 .45-1 1s.45 1 1 1 1-.45 1-1c0-.1-.03-.19-.06-.28l3.78 3.78h.01l1.41-1.41L3.91 3.86 2.5 5.27z');
        $doc->addChild($l0I13);
    }
}
