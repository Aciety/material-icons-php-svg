<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

final class CancelPresentationSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M1 3v18h22V3H1zm20 16H3V5h18v14zM9.41 16L12 13.41 14.59 16 16 14.59 13.41 12 16 9.41 14.59 8 12 10.59 9.41 8 8 9.41 10.59 12 8 14.59z');
        $doc->addChild($l0I1);
    }
}
