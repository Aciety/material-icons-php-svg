<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class NoCellIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M8.83,6l-3.7-3.7C5.42,1.55,6.15,1,7,1l10,0.01c1.1,0,2,0.89,2,1.99v13.17l-2-2V6H8.83z M19.78,22.61l-0.91-0.91 C18.58,22.45,17.85,23,17,23H7c-1.1,0-2-0.9-2-2V7.83L1.39,4.22l1.41-1.41l18.38,18.38L19.78,22.61z M15.17,18L7,9.83V18H15.17z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
