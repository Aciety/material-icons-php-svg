<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['!', 'alert', 'attention', 'bad', 'caution', 'danger', 'destination', 'direction', 'error', 'exclamation', 'fmd', 'important', 'location', 'maps', 'mark', 'notification', 'pin', 'place', 'symbol', 'warning'],
)]
final class FmdBadRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M12,2c-4.2,0-8,3.22-8,8.2c0,3.18,2.45,6.92,7.34,11.23c0.38,0.33,0.95,0.33,1.33,0C17.55,17.12,20,13.38,20,10.2 C20,5.22,16.2,2,12,2z M12,15L12,15c-0.55,0-1-0.45-1-1v0c0-0.55,0.45-1,1-1h0c0.55,0,1,0.45,1,1v0C13,14.55,12.55,15,12,15z M12,11L12,11c-0.55,0-1-0.45-1-1V7c0-0.55,0.45-1,1-1h0c0.55,0,1,0.45,1,1v3C13,10.55,12.55,11,12,11z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
