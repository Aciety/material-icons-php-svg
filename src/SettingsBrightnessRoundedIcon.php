<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class SettingsBrightnessRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M20,4H4C2.9,4,2,4.9,2,6v12c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V6C22,4.9,21.1,4,20,4z M17.15,12.35L16,13.5v2 c0,0.28-0.22,0.5-0.5,0.5h-2l-1.15,1.15c-0.2,0.2-0.51,0.2-0.71,0L10.5,16h-2C8.22,16,8,15.78,8,15.5v-2l-1.15-1.15 c-0.2-0.2-0.2-0.51,0-0.71L8,10.5v-2C8,8.22,8.22,8,8.5,8h2l1.15-1.15c0.2-0.2,0.51-0.2,0.71,0L13.5,8h2C15.78,8,16,8.22,16,8.5v2 l1.15,1.15C17.34,11.84,17.34,12.16,17.15,12.35z M12,9v6c1.66,0,3-1.34,3-3C15,10.34,13.66,9,12,9z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
