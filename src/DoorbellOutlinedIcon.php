<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['search'],
    tags: ['alarm', 'bell', 'door', 'doorbell', 'home', 'house', 'ringing'],
)]
final class DoorbellOutlinedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M11,16.5h2c0,0.55-0.45,1-1,1S11,17.05,11,16.5z M15,15v-2.34c0-1.54-0.81-2.82-2.25-3.16V9.25c0-0.41-0.34-0.75-0.75-0.75 s-0.75,0.34-0.75,0.75V9.5C9.82,9.84,9,11.12,9,12.66V15H8v1h8v-1H15z M12,5.5L6,10v9h12v-9L12,5.5 M12,3l8,6v12H4V9L12,3z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
