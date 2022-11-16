<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class SettingsInputHdmiRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M18,7V4c0-1.1-0.9-2-2-2H8C6.9,2,6,2.9,6,4v3C5.45,7,5,7.45,5,8v4.7c0,0.2,0.06,0.39,0.17,0.55L8,19v2c0,0.55,0.45,1,1,1h6 c0.55,0,1-0.45,1-1v-2l2.83-5.75C18.94,13.09,19,12.89,19,12.7V8C19,7.45,18.55,7,18,7z M16,7h-2V5.5C14,5.22,13.78,5,13.5,5 S13,5.22,13,5.5V7h-2V5.5C11,5.22,10.78,5,10.5,5S10,5.22,10,5.5V7H8V4h8V7z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
