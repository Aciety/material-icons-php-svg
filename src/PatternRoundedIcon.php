<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['key', 'login', 'password', 'pattern', 'pin', 'security', 'star', 'unlock'],
)]
final class PatternRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M4,6c0-1.1,0.9-2,2-2s2,0.9,2,2S7.1,8,6,8S4,7.1,4,6z M6,14c1.1,0,2-0.9,2-2s-0.9-2-2-2s-2,0.9-2,2S4.9,14,6,14z M12,8 c1.1,0,2-0.9,2-2s-0.9-2-2-2s-2,0.9-2,2S10.9,8,12,8z M18,10c-1.1,0-2,0.9-2,2s0.9,2,2,2s2-0.9,2-2S19.1,10,18,10z M17.98,16 c-0.74,0-1.37,0.4-1.72,1h-2.54c-0.34-0.6-0.98-1-1.72-1s-1.37,0.4-1.72,1H8.41l3.07-3.07C11.65,13.97,11.82,14,12,14 c1.1,0,2-0.9,2-2c0-0.18-0.03-0.35-0.07-0.51l3.56-3.56C17.65,7.97,17.82,8,18,8c1.1,0,2-0.9,2-2s-0.9-2-2-2s-2,0.9-2,2 c0,0.18,0.03,0.35,0.07,0.51l-3.56,3.56C12.35,10.03,12.18,10,12,10c-1.1,0-2,0.9-2,2c0,0.18,0.03,0.35,0.07,0.51l-3.56,3.56 C6.35,16.03,6.18,16,6,16c-1.1,0-2,0.9-2,2s0.9,2,2,2c0.74,0,1.37-0.4,1.72-1h2.57c0.34,0.6,0.98,1,1.72,1s1.37-0.4,1.72-1h2.55 c0.34,0.6,0.98,1,1.72,1c1.1,0,2-0.9,2-2C19.98,16.9,19.08,16,17.98,16z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
