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
final class FmdBadTwoToneIcon extends SVG
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M11,15h2v-2h-2V15z M11,11h2V6h-2V11z M12,2c-4.2,0-8,3.22-8,8.2c0,3.32,2.67,7.25,8,11.8c5.33-4.55,8-8.48,8-11.8 C20,5.22,16.2,2,12,2z M12,19.33c-4.05-3.7-6-6.79-6-9.14C6,6.57,8.65,4,12,4s6,2.57,6,6.2C18,12.54,16.05,15.64,12,19.33z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M12,19.33c4.05-3.7,6-6.79,6-9.14C18,6.57,15.35,4,12,4s-6,2.57-6,6.2C6,12.54,7.95,15.64,12,19.33z M11,6 h2v5h-2V6z M11,13h2v2h-2V13z');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
