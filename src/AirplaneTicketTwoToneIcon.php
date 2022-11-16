<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class AirplaneTicketTwoToneIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M4.01,8.54C5.2,9.23,6,10.52,6,12c0,1.47-0.81,2.77-2,3.46V18h16V6H4L4.01,8.54z M8.14,12.53l1.26,0.99 l2.39-0.64l-2.4-4.16l1.4-0.38l4.01,3.74l2.44-0.65c0.51-0.14,1.04,0.17,1.18,0.68c0.13,0.51-0.17,1.04-0.69,1.19l-8.86,2.36 l-1.66-2.88L8.14,12.53z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M20.19,4H4C2.9,4,2.01,4.9,2.01,6v4C3.11,10,4,10.9,4,12s-0.89,2-2,2v4c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V6 C22,4.9,21.19,4,20.19,4z M20,18H4v-2.54c1.19-0.69,2-1.99,2-3.46c0-1.48-0.8-2.77-1.99-3.46L4,6h16V18z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M17.73,13.3c0.52-0.15,0.82-0.68,0.69-1.19c-0.14-0.51-0.67-0.82-1.18-0.68l-2.44,0.65l-4.01-3.74l-1.4,0.38l2.4,4.16 L9.4,13.52l-1.26-0.99l-0.93,0.25l1.66,2.88L17.73,13.3z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
