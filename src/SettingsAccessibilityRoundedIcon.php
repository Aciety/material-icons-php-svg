<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class SettingsAccessibilityRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M20.74,4.96c-0.13-0.53-0.67-0.85-1.2-0.73C17.16,4.77,14.49,5,12,5S6.84,4.77,4.46,4.24c-0.54-0.12-1.07,0.19-1.2,0.73 L3.24,5.02C3.11,5.56,3.43,6.12,3.97,6.24C5.59,6.61,7.34,6.86,9,7v11c0,0.55,0.45,1,1,1h0c0.55,0,1-0.45,1-1v-5h2v5 c0,0.55,0.45,1,1,1h0c0.55,0,1-0.45,1-1V7c1.66-0.14,3.41-0.39,5.03-0.76c0.54-0.12,0.86-0.68,0.73-1.22L20.74,4.96z M12,4 c1.1,0,2-0.9,2-2s-0.9-2-2-2s-2,0.9-2,2S10.9,4,12,4z M8,24L8,24c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1h0c-0.55,0-1,0.45-1,1v0 C7,23.55,7.45,24,8,24z M12,24L12,24c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1h0c-0.55,0-1,0.45-1,1v0C11,23.55,11.45,24,12,24z M16,24L16,24c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1h0c-0.55,0-1,0.45-1,1v0C15,23.55,15.45,24,16,24z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
