<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

final class PanoramaHorizontalSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M4 6.55c2.6.77 5.28 1.16 8 1.16 2.72 0 5.41-.39 8-1.16v10.91c-2.6-.77-5.28-1.16-8-1.16-2.72 0-5.41.39-8 1.16V6.55M2 3.77v16.47s.77-.26.88-.3C5.82 18.85 8.91 18.3 12 18.3c3.09 0 6.18.55 9.12 1.64.11.04.88.3.88.3V3.77s-.77.26-.88.3C18.18 5.15 15.09 5.71 12 5.71s-6.18-.56-9.12-1.64c-.11-.05-.88-.3-.88-.3z');
        $doc->addChild($l0I1);
    }
}
