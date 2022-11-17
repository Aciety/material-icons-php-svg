<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['av'],
    tags: ['av', 'clock', 'countdown', 'duration', 'minutes', 'seconds', 'time', 'timer', 'watch'],
)]
final class AvTimerTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12 21c4.97 0 9-4.03 9-9s-4.03-9-9-9h-1v4h2V5.08c3.39.49 6 3.39 6 6.92 0 3.87-3.13 7-7 7s-7-3.13-7-7c0-1.68.59-3.22 1.58-4.42L12 13l1.41-1.41-6.8-6.8v.02C4.42 6.45 3 9.05 3 12c0 4.97 4.02 9 9 9z');
        $doc->addChild($l0I1);
        $l0I2 = new SVGCircle(cx: '12', cy: '17', r: '1');
        $doc->addChild($l0I2);
        $l0I3 = new SVGCircle(cx: '17', cy: '12', r: '1');
        $doc->addChild($l0I3);
        $l0I4 = new SVGCircle(cx: '7', cy: '12', r: '1');
        $doc->addChild($l0I4);
    }
}
