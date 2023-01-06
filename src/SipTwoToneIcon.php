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
final class SipTwoToneIcon extends SvgIcon
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
        $l2I0->setStyle('enable-background', 'new');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M4,18h16V6H4V18z M14,9h4c0.55,0,1,0.45,1,1v2c0,0.55-0.45,1-1,1h-2.5v2H14V9z M11,9h2v6h-2V9z M5,13.5h3.5v-0.75H6c-0.55,0-1-0.45-1-1V10c0-0.55,0.45-1,1-1h4v1.5H6.5v0.75H9c0.55,0,1,0.45,1,1V14 c0,0.55-0.45,1-1,1H5V13.5z');
        $l2I1->setStyle('enable-background', 'new');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M10,14v-1.75c0-0.55-0.45-1-1-1H6.5V10.5H10V9H6c-0.55,0-1,0.45-1,1v1.75c0,0.55,0.45,1,1,1h2.5v0.75H5V15h4 C9.55,15,10,14.55,10,14z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M20,4H4C2.9,4,2,4.9,2,6v12c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V6C22,4.9,21.1,4,20,4z M20,18H4V6h16V18z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGRect(x: '11', y: '9', width: '2', height: '6');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M15.5,13H18c0.55,0,1-0.45,1-1v-2c0-0.55-0.45-1-1-1h-4v6h1.5V13z M15.5,10.5h2v1h-2V10.5z');
        $l1I0->addChild($l2I5);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
