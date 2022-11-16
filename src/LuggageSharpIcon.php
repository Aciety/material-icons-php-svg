<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class LuggageSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M19,6h-4V2H9v4H5v15h2c0,0.55,0.45,1,1,1c0.55,0,1-0.45,1-1h6c0,0.55,0.45,1,1,1c0.55,0,1-0.45,1-1h2V6z M9.5,18H8V9h1.5 V18z M12.75,18h-1.5V9h1.5V18z M13.5,6h-3V3.5h3V6z M16,18h-1.5V9H16V18z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
