<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['app', 'apps', 'edit', 'pencil', 'register', 'registration'],
)]
final class AppRegistrationRoundedIcon extends SVG
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
        $l2I0 = new SVGCircle(cx: '12', cy: '6', r: '2');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '6', cy: '18', r: '2');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGCircle(cx: '6', cy: '12', r: '2');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGCircle(cx: '6', cy: '6', r: '2');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGCircle(cx: '18', cy: '6', r: '2');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M11,18.07v1.43c0,0.28,0.22,0.5,0.5,0.5h1.4c0.13,0,0.26-0.05,0.35-0.15l5.83-5.83l-2.12-2.12l-5.81,5.81 C11.05,17.81,11,17.94,11,18.07z');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGPath(d: 'M12.03,14L14,12.03V12c0-1.1-0.9-2-2-2s-2,0.9-2,2s0.9,2,2,2H12.03z');
        $l1I0->addChild($l2I6);
        $l2I7 = new SVGPath(d: 'M20.85,11.56l-1.41-1.41c-0.2-0.2-0.51-0.2-0.71,0l-1.06,1.06l2.12,2.12l1.06-1.06C21.05,12.07,21.05,11.76,20.85,11.56z');
        $l1I0->addChild($l2I7);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
