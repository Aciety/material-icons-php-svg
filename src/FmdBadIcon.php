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
final class FmdBadIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M12,2c-4.2,0-8,3.22-8,8.2c0,3.32,2.67,7.25,8,11.8c5.33-4.55,8-8.48,8-11.8C20,5.22,16.2,2,12,2z M13,15h-2v-2h2V15z M13,11h-2V6h2V11z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
