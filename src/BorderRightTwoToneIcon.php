<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

final class BorderRightTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M3 3h2v2H3zm0 16h2v2H3zM15 3h2v2h-2zm0 16h2v2h-2zm0-8h2v2h-2zM3 15h2v2H3zm0-4h2v2H3zm0-4h2v2H3zm8 8h2v2h-2zm-4-4h2v2H7zm0-8h2v2H7zm12 0h2v18h-2zM7 19h2v2H7zm4-16h2v2h-2zm0 4h2v2h-2zm0 4h2v2h-2zm0 8h2v2h-2z');
        $doc->addChild($l0I1);
    }
}