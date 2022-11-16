<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

final class LocalLibraryTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M19 17.13v-6.95c-2.1.38-4.05 1.35-5.64 2.83L12 14.28l-1.36-1.27C9.05 11.53 7.1 10.56 5 10.18v6.95c2.53.34 4.94 1.3 7 2.83 2.07-1.52 4.47-2.49 7-2.83z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGCircle(cx: '12', cy: '5', r: '2');
        $l0I2->setStyle('opacity', '.3');
        $doc->addChild($l0I2);
        $l0I3 = new SVGPath(d: 'M16 5c0-2.21-1.79-4-4-4S8 2.79 8 5s1.79 4 4 4 4-1.79 4-4zm-6 0c0-1.1.9-2 2-2s2 .9 2 2-.9 2-2 2-2-.9-2-2zM3 19c3.48 0 6.64 1.35 9 3.55 2.36-2.19 5.52-3.55 9-3.55V8c-3.48 0-6.64 1.35-9 3.55C9.64 9.35 6.48 8 3 8v11zm2-8.82c2.1.38 4.05 1.35 5.64 2.83L12 14.28l1.36-1.27c1.59-1.48 3.54-2.45 5.64-2.83v6.95c-2.53.34-4.93 1.3-7 2.82-2.06-1.52-4.47-2.49-7-2.83v-6.94z');
        $doc->addChild($l0I3);
    }
}
