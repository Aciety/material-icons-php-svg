<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['content'],
    tags: ['cast', 'connected', 'feed', 'live', 'network', 'signal', 'stream', 'wireless'],
)]
final class StreamIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGCircle(cx: '20', cy: '12', r: '2');
        $doc->addChild($l0I1);
        $l0I2 = new SVGCircle(cx: '4', cy: '12', r: '2');
        $doc->addChild($l0I2);
        $l0I3 = new SVGCircle(cx: '12', cy: '20', r: '2');
        $doc->addChild($l0I3);
        $l0I4 = new SVGPath(d: 'M10.05 8.59L6.03 4.55h-.01l-.31-.32-1.42 1.41 4.02 4.05.01-.01.31.32zm3.893.027l4.405-4.392L19.76 5.64l-4.405 4.393zM10.01 15.36l-1.42-1.41-4.03 4.01-.32.33 1.41 1.41 4.03-4.02zm9.75 2.94l-3.99-4.01-.36-.35L14 15.35l3.99 4.01.35.35z');
        $doc->addChild($l0I4);
        $l0I5 = new SVGCircle(cx: '12', cy: '4', r: '2');
        $doc->addChild($l0I5);
    }
}
