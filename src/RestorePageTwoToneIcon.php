<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

final class RestorePageTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M6 4v16h12V8.83L13.17 4H6zm10.72 9c0 2.48-2.02 4.5-4.5 4.5-1.84 0-3.43-1.12-4.12-2.7h1.54c.57.81 1.51 1.35 2.58 1.35 1.74 0 3.15-1.41 3.15-3.15s-1.41-3.15-3.15-3.15c-1.21 0-2.27.7-2.79 1.71L10.88 13h-3.6V9.4l1.17 1.17c.8-1.24 2.19-2.07 3.78-2.07 2.48 0 4.49 2.02 4.49 4.5z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7.17L18 8.83V20zm-9.55-9.43L7.28 9.4V13h3.6l-1.44-1.44c.52-1.01 1.58-1.71 2.79-1.71 1.74 0 3.15 1.41 3.15 3.15s-1.41 3.15-3.15 3.15c-1.07 0-2.02-.54-2.58-1.35H8.1c.69 1.58 2.28 2.7 4.12 2.7 2.48 0 4.5-2.02 4.5-4.5s-2.02-4.5-4.5-4.5c-1.59 0-2.97.83-3.77 2.07z');
        $doc->addChild($l0I2);
    }
}