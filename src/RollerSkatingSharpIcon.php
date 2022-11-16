<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class RollerSkatingSharpIcon extends SVG
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M20,16l-0.01-6l-5.71-1.43C13.4,8.35,12.7,7.76,12.32,7H9V6h3.02L12,5H9V4h3V1H4v15H20z M5,23c-1.66,0-3-1.34-3-3 s1.34-3,3-3s3,1.34,3,3S6.66,23,5,23z M19,23c-1.66,0-3-1.34-3-3s1.34-3,3-3s3,1.34,3,3S20.66,23,19,23z M12,23 c-1.66,0-3-1.34-3-3s1.34-3,3-3s3,1.34,3,3S13.66,23,12,23z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
