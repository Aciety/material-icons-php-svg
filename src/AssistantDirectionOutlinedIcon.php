<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['navigation'],
    tags: ['assistant', 'destination', 'direction', 'location', 'maps', 'navigate', 'navigation', 'pin', 'place', 'right', 'stop'],
)]
final class AssistantDirectionOutlinedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M12,1C5.9,1,1,5.9,1,12s4.9,11,11,11s11-4.9,11-11S18.1,1,12,1z M12,21c-4.99,0-9-4.01-9-9s4.01-9,9-9s9,4.01,9,9 S16.99,21,12,21z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M19.73,11.42L12.54,4.2c-0.36-0.27-0.8-0.27-1.15,0L4.2,11.42c-0.27,0.36-0.27,0.8,0,1.16l7.19,7.22 c0.36,0.27,0.8,0.27,1.15,0l7.19-7.22C20.09,12.22,20.09,11.69,19.73,11.42z M13.5,14.5l-1.41-1.41L13.17,12H10v3H8v-4 c0-0.6,0.4-1,1-1h4.17l-1.09-1.09L13.5,7.5L17,11L13.5,14.5z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
