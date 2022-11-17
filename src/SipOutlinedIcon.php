<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['alphabet', 'call', 'character', 'dialer', 'font', 'initiation', 'internet', 'letter', 'over', 'phone', 'protocol', 'routing', 'session', 'sip', 'symbol', 'text', 'type', 'voice'],
)]
final class SipOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M4,4h16c1.1,0,2,0.9,2,2v12c0,1.1-0.9,2-2,2H4c-1.1,0-2-0.9-2-2V6C2,4.9,2.9,4,4,4z M4,6v12h16V6H4z M11,9h2v6h-2V9z M14,9 h4c0.55,0,1,0.45,1,1v2c0,0.55-0.45,1-1,1h-2.5v2H14V9z M17.5,10.5h-2v1h2V10.5z M6.5,11.25H9c0.55,0,1,0.45,1,1V14 c0,0.55-0.45,1-1,1H5v-1.5h3.5v-0.75H6c-0.55,0-1-0.45-1-1V10c0-0.55,0.45-1,1-1h4v1.5H6.5V11.25z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
