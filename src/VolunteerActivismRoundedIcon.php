<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['activism', 'donation', 'fingers', 'gesture', 'giving', 'hand', 'hands', 'heart', 'love', 'sharing', 'volunteer'],
)]
final class VolunteerActivismRoundedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M3,11L3,11c-1.1,0-2,0.9-2,2v7c0,1.1,0.9,2,2,2h0c1.1,0,2-0.9,2-2v-7C5,11.9,4.1,11,3,11z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M10,5.3C10,3.45,11.45,2,13.3,2c1.04,0,2.05,0.49,2.7,1.25C16.65,2.49,17.66,2,18.7,2C20.55,2,22,3.45,22,5.3 c0,2.1-2.5,4.51-5.33,7.09c-0.38,0.35-0.97,0.35-1.35,0C12.5,9.81,10,7.4,10,5.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M19.99,17h-6.83c-0.11,0-0.22-0.02-0.33-0.06l-1.47-0.51c-0.26-0.09-0.39-0.37-0.3-0.63l0,0c0.09-0.26,0.38-0.4,0.64-0.3 l1.12,0.43c0.11,0.04,0.24,0.07,0.36,0.07h2.63c0.65,0,1.18-0.53,1.18-1.18v0c0-0.49-0.31-0.93-0.77-1.11L9.3,11.13 C9.08,11.04,8.84,11,8.6,11H7v9.02l6.37,1.81c0.41,0.12,0.85,0.1,1.25-0.05L22,19l0,0C22,17.89,21.1,17,19.99,17z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
