<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['animal', 'cat', 'dog', 'hand', 'paw', 'pet'],
)]
final class PetsIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGCircle(cx: '4.5', cy: '9.5', r: '2.5');
        $doc->addChild($l0I1);
        $l0I2 = new SVGCircle(cx: '9', cy: '5.5', r: '2.5');
        $doc->addChild($l0I2);
        $l0I3 = new SVGCircle(cx: '15', cy: '5.5', r: '2.5');
        $doc->addChild($l0I3);
        $l0I4 = new SVGCircle(cx: '19.5', cy: '9.5', r: '2.5');
        $doc->addChild($l0I4);
        $l0I5 = new SVGPath(d: 'M17.34 14.86c-.87-1.02-1.6-1.89-2.48-2.91-.46-.54-1.05-1.08-1.75-1.32-.11-.04-.22-.07-.33-.09-.25-.04-.52-.04-.78-.04s-.53 0-.79.05c-.11.02-.22.05-.33.09-.7.24-1.28.78-1.75 1.32-.87 1.02-1.6 1.89-2.48 2.91-1.31 1.31-2.92 2.76-2.62 4.79.29 1.02 1.02 2.03 2.33 2.32.73.15 3.06-.44 5.54-.44h.18c2.48 0 4.81.58 5.54.44 1.31-.29 2.04-1.31 2.33-2.32.31-2.04-1.3-3.49-2.61-4.8z');
        $doc->addChild($l0I5);
    }
}
