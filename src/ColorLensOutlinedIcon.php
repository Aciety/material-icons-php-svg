<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['art', 'color', 'lens', 'paint', 'pallet'],
)]
final class ColorLensOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12 22C6.49 22 2 17.51 2 12S6.49 2 12 2s10 4.04 10 9c0 3.31-2.69 6-6 6h-1.77c-.28 0-.5.22-.5.5 0 .12.05.23.13.33.41.47.64 1.06.64 1.67 0 1.38-1.12 2.5-2.5 2.5zm0-18c-4.41 0-8 3.59-8 8s3.59 8 8 8c.28 0 .5-.22.5-.5 0-.16-.08-.28-.14-.35-.41-.46-.63-1.05-.63-1.65 0-1.38 1.12-2.5 2.5-2.5H16c2.21 0 4-1.79 4-4 0-3.86-3.59-7-8-7z');
        $doc->addChild($l0I1);
        $l0I2 = new SVGCircle(cx: '6.5', cy: '11.5', r: '1.5');
        $doc->addChild($l0I2);
        $l0I3 = new SVGCircle(cx: '9.5', cy: '7.5', r: '1.5');
        $doc->addChild($l0I3);
        $l0I4 = new SVGCircle(cx: '14.5', cy: '7.5', r: '1.5');
        $doc->addChild($l0I4);
        $l0I5 = new SVGCircle(cx: '17.5', cy: '11.5', r: '1.5');
        $doc->addChild($l0I5);
    }
}
