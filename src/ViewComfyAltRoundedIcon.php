<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['alt', 'comfy', 'cozy', 'design', 'format', 'layout', 'view', 'web'],
)]
final class ViewComfyAltRoundedIcon extends SVG
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M20,4H4C2.9,4,2,4.9,2,6v12c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V6C22,4.9,21.1,4,20,4z M10.5,17h-3 C7.22,17,7,16.78,7,16.5v-3C7,13.22,7.22,13,7.5,13h3c0.28,0,0.5,0.22,0.5,0.5v3C11,16.78,10.78,17,10.5,17z M10.5,11h-3 C7.22,11,7,10.78,7,10.5v-3C7,7.22,7.22,7,7.5,7h3C10.78,7,11,7.22,11,7.5v3C11,10.78,10.78,11,10.5,11z M16.5,17h-3 c-0.28,0-0.5-0.22-0.5-0.5v-3c0-0.28,0.22-0.5,0.5-0.5h3c0.28,0,0.5,0.22,0.5,0.5v3C17,16.78,16.78,17,16.5,17z M16.5,11h-3 c-0.28,0-0.5-0.22-0.5-0.5v-3C13,7.22,13.22,7,13.5,7h3C16.78,7,17,7.22,17,7.5v3C17,10.78,16.78,11,16.5,11z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
