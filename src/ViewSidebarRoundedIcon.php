<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class ViewSidebarRoundedIcon extends SVG
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
        $l1I1 = new SVGPath(d: 'M15,20H3c-0.55,0-1-0.45-1-1V5c0-0.55,0.45-1,1-1h12c0.55,0,1,0.45,1,1v14C16,19.55,15.55,20,15,20z M19,8h2 c0.55,0,1-0.45,1-1V5c0-0.55-0.45-1-1-1h-2c-0.55,0-1,0.45-1,1v2C18,7.55,18.45,8,19,8z M19,20h2c0.55,0,1-0.45,1-1v-2 c0-0.55-0.45-1-1-1h-2c-0.55,0-1,0.45-1,1v2C18,19.55,18.45,20,19,20z M19,14h2c0.55,0,1-0.45,1-1v-2c0-0.55-0.45-1-1-1h-2 c-0.55,0-1,0.45-1,1v2C18,13.55,18.45,14,19,14z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
