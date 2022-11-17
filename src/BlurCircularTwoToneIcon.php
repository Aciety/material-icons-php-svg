<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['blur', 'circle', 'circular', 'dots', 'edit', 'editing', 'effect', 'enhance', 'filter'],
)]
final class BlurCircularTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M14 7.5c.28 0 .5-.22.5-.5s-.22-.5-.5-.5-.5.22-.5.5.22.5.5.5z');
        $doc->addChild($l0I1);
        $l0I2 = new SVGCircle(cx: '14', cy: '10', r: '1');
        $doc->addChild($l0I2);
        $l0I3 = new SVGCircle(cx: '14', cy: '14', r: '1');
        $doc->addChild($l0I3);
        $l0I4 = new SVGPath(d: 'M10 16.5c-.28 0-.5.22-.5.5s.22.5.5.5.5-.22.5-.5-.22-.5-.5-.5z');
        $doc->addChild($l0I4);
        $l0I5 = new SVGCircle(cx: '10', cy: '10', r: '1');
        $doc->addChild($l0I5);
        $l0I6 = new SVGPath(d: 'M7 13.5c-.28 0-.5.22-.5.5s.22.5.5.5.5-.22.5-.5-.22-.5-.5-.5zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zM7 9.5c-.28 0-.5.22-.5.5s.22.5.5.5.5-.22.5-.5-.22-.5-.5-.5z');
        $doc->addChild($l0I6);
        $l0I7 = new SVGCircle(cx: '10', cy: '14', r: '1');
        $doc->addChild($l0I7);
        $l0I8 = new SVGPath(d: 'M10 7.5c.28 0 .5-.22.5-.5s-.22-.5-.5-.5-.5.22-.5.5.22.5.5.5zm4 9c-.28 0-.5.22-.5.5s.22.5.5.5.5-.22.5-.5-.22-.5-.5-.5zm3-7c-.28 0-.5.22-.5.5s.22.5.5.5.5-.22.5-.5-.22-.5-.5-.5zm0 4c-.28 0-.5.22-.5.5s.22.5.5.5.5-.22.5-.5-.22-.5-.5-.5z');
        $doc->addChild($l0I8);
    }
}
