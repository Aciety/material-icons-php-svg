<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class GasMeterRoundedIcon extends SVG
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
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M16,4h-1V3c0-0.55-0.45-1-1-1h0c-0.55,0-1,0.45-1,1v1h-2V3c0-0.55-0.45-1-1-1h0C9.45,2,9,2.45,9,3v1H8C5.79,4,4,5.79,4,8 v10c0,2.21,1.79,4,4,4h8c2.21,0,4-1.79,4-4V8C20,5.79,18.21,4,16,4z M12,18c-1.38,0-2.5-1.1-2.5-2.46c0-1.02,0.38-1.35,2.12-3.35 c0.2-0.23,0.56-0.23,0.75,0c1.73,1.99,2.12,2.34,2.12,3.35C14.5,16.9,13.38,18,12,18z M15,10H9c-0.55,0-1-0.45-1-1v0 c0-0.55,0.45-1,1-1h6c0.55,0,1,0.45,1,1v0C16,9.55,15.55,10,15,10z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}