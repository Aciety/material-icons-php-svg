<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['Android', 'OS', 'arrow', 'device', 'hardware', 'iOS', 'mobile', 'phone', 'rotate', 'rotation', 'screen', 'tablet', 'turn'],
)]
final class ScreenRotationAltRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M18.53,9.29C19.16,9.92,18.71,11,17.82,11c-0.27,0-0.52-0.11-0.71-0.29L10.4,4L5.41,9H7c0.55,0,1,0.45,1,1s-0.45,1-1,1H3 c-0.55,0-1-0.45-1-1V6c0-0.55,0.45-1,1-1s1,0.45,1,1v1.59l5-5c0.78-0.78,2.05-0.78,2.83,0L18.53,9.29z');
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M5.47,14.71C4.84,14.08,5.29,13,6.18,13c0.27,0,0.52,0.11,0.71,0.29L13.6,20l4.99-5H17c-0.55,0-1-0.45-1-1s0.45-1,1-1h4 c0.55,0,1,0.45,1,1v4c0,0.55-0.45,1-1,1s-1-0.45-1-1v-1.59l-5,5c-0.78,0.78-2.05,0.78-2.83,0L5.47,14.71z');
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
