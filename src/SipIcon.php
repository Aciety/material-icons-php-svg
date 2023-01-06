<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['alphabet', 'call', 'character', 'dialer', 'font', 'initiation', 'internet', 'letter', 'over', 'phone', 'protocol', 'routing', 'session', 'sip', 'symbol', 'text', 'type', 'voice'],
)]
final class SipIcon extends SvgIcon
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
        $l2I0 = new SVGRect(x: '15.5', y: '10.5', width: '2', height: '1');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M20,4H4C2.9,4,2,4.9,2,6v12c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V6C22,4.9,21.1,4,20,4z M10,10.5H6.5v0.75H9 c0.55,0,1,0.45,1,1V14c0,0.55-0.45,1-1,1H5v-1.5h3.5v-0.75H6c-0.55,0-1-0.45-1-1V10c0-0.55,0.45-1,1-1h4V10.5z M13,15h-2V9h2V15z M19,12c0,0.55-0.45,1-1,1h-2.5v2H14V9h4c0.55,0,1,0.45,1,1V12z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
