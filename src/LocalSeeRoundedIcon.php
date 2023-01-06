<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['camera', 'lens', 'local', 'photo', 'photography', 'picture', 'see'],
)]
final class LocalSeeRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M9.5,14c0,1.38,1.12,2.5,2.5,2.5c1.23,0,2.25-0.9,2.46-2.07c-1-1.01-1.83-1.98-2.48-2.93C10.61,11.52,9.5,12.63,9.5,14z');
        $l2I0->addChild($l3I0);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M18.65,17.08c-0.37,0.32-0.92,0.32-1.3,0c-1.26-1.08-0.7-0.61-1.3-1.14c-0.83,1.74-2.73,2.87-4.85,2.5 c-1.83-0.32-3.31-1.8-3.63-3.63c-0.42-2.44,1.13-4.58,3.31-5.14C10.3,8.45,10,7.28,10,6.15C10,5.4,10.1,4.68,10.28,4h-0.4 c-0.56,0-1.1,0.24-1.48,0.65L7.17,6H4C2.9,6,2,6.9,2,8v12c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2v-6.03 C20.59,15.46,19.35,16.48,18.65,17.08z');
        $l2I1->addChild($l3I0);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M17.34,14.42c0.37,0.33,0.95,0.33,1.33,0C22.22,11.25,24,8.5,24,6.15C24,2.42,21.15,0,18,0s-6,2.42-6,6.15 C12,8.5,13.78,11.25,17.34,14.42z M17.27,5.25L18,3l0.73,2.25H21l-1.85,1.47L19.85,9L18,7.59L16.15,9l0.7-2.28L15,5.25H17.27z');
        $l2I2->addChild($l3I0);
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
