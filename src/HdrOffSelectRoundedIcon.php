<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['alphabet', 'camera', 'character', 'circle', 'disabled', 'dynamic', 'enabled', 'font', 'hdr', 'high', 'letter', 'off', 'on', 'photo', 'range', 'select', 'slash', 'symbol', 'text', 'type'],
)]
final class HdrOffSelectRoundedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M18,18.5v-1c0-0.83-0.67-1.5-1.5-1.5H14c-0.55,0-1,0.45-1,1v4.31c0,0.38,0.31,0.69,0.69,0.69h0.11 c0.38,0,0.69-0.31,0.69-0.69V20h1.1l0.72,1.59c0.11,0.25,0.36,0.41,0.63,0.41h0c0.5,0,0.83-0.51,0.64-0.97L17.1,19.9 C17.6,19.6,18,19.1,18,18.5z M16.5,18.5h-2v-1h2V18.5z M3.5,18h-2v-1.25C1.5,16.34,1.16,16,0.75,16h0C0.34,16,0,16.34,0,16.75v4.5 C0,21.66,0.34,22,0.75,22h0c0.41,0,0.75-0.34,0.75-0.75V19.5h2v1.75C3.5,21.66,3.84,22,4.25,22h0C4.66,22,5,21.66,5,21.25v-4.5 C5,16.34,4.66,16,4.25,16h0c-0.41,0-0.75,0.34-0.75,0.75V18z M10,16H7.5c-0.55,0-1,0.45-1,1v4c0,0.55,0.45,1,1,1H10 c0.82,0,1.5-0.67,1.5-1.5v-3C11.5,16.67,10.82,16,10,16z M10,20.5H8v-3h2V20.5z M23.25,20H22v1.25c0,0.41-0.34,0.75-0.75,0.75l0,0 c-0.41,0-0.75-0.34-0.75-0.75V20h-1.25c-0.41,0-0.75-0.34-0.75-0.75l0,0c0-0.41,0.34-0.75,0.75-0.75h1.25v-1.25 c0-0.41,0.34-0.75,0.75-0.75l0,0c0.41,0,0.75,0.34,0.75,0.75v1.25h1.25c0.41,0,0.75,0.34,0.75,0.75l0,0 C24,19.66,23.66,20,23.25,20z M10.98,4.15L9.42,2.59c5.1-2.42,10.41,2.89,7.99,7.99l-1.56-1.56C16.66,6.06,13.94,3.34,10.98,4.15z M5.63,3.05L5.63,3.05c-0.39,0.39-0.39,1.02,0,1.41l0.96,0.96c-2.42,5.1,2.88,10.41,7.99,7.99l0.95,0.95 c0.39,0.39,1.02,0.39,1.41,0l0,0c0.39-0.39,0.39-1.02,0-1.41l-9.9-9.91C6.66,2.66,6.02,2.66,5.63,3.05z M8.15,6.98l4.87,4.87 C10.06,12.66,7.34,9.94,8.15,6.98z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
