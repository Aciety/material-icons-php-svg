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
    tags: ['comfy', 'cozy', 'design', 'format', 'layout', 'view', 'web'],
)]
final class ViewCozyRoundedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M20,4H4C2.9,4,2,4.9,2,6v12c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V6C22,4.9,21.1,4,20,4z M10.75,16.75h-3 c-0.28,0-0.5-0.22-0.5-0.5v-3c0-0.28,0.22-0.5,0.5-0.5h3c0.28,0,0.5,0.22,0.5,0.5v3C11.25,16.53,11.03,16.75,10.75,16.75z M10.75,11.25h-3c-0.28,0-0.5-0.22-0.5-0.5v-3c0-0.28,0.22-0.5,0.5-0.5h3c0.28,0,0.5,0.22,0.5,0.5v3 C11.25,11.03,11.03,11.25,10.75,11.25z M16.25,16.75h-3c-0.28,0-0.5-0.22-0.5-0.5v-3c0-0.28,0.22-0.5,0.5-0.5h3 c0.28,0,0.5,0.22,0.5,0.5v3C16.75,16.53,16.53,16.75,16.25,16.75z M16.25,11.25h-3c-0.28,0-0.5-0.22-0.5-0.5v-3 c0-0.28,0.22-0.5,0.5-0.5h3c0.28,0,0.5,0.22,0.5,0.5v3C16.75,11.03,16.53,11.25,16.25,11.25z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
