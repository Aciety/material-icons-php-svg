<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

final class ArrowLeftOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M24 0v24H0V0h24z');
        $l0I0->setStyle('fill', 'none');
        $l0I0->setStyle('opacity', '.87');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M14 7l-5 5 5 5V7z');
        $doc->addChild($l0I1);
    }
}
