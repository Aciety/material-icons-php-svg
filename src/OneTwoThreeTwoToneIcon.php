<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class OneTwoThreeTwoToneIcon extends SVG
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
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M7,15H5.5v-4.5H4V9h3V15z M13.5,13.5h-3v-1h2c0.55,0,1-0.45,1-1V10c0-0.55-0.45-1-1-1H9v1.5h3v1h-2c-0.55,0-1,0.45-1,1V15 h4.5V13.5z M19.5,14v-4c0-0.55-0.45-1-1-1H15v1.5h3v1h-2v1h2v1h-3V15h3.5C19.05,15,19.5,14.55,19.5,14z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
