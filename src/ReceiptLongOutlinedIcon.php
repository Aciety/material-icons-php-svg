<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['bill', 'check', 'document', 'list', 'long', 'paper', 'paperwork', 'receipt', 'record', 'store', 'transaction'],
)]
final class ReceiptLongOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M19.5,3.5L18,2l-1.5,1.5L15,2l-1.5,1.5L12,2l-1.5,1.5L9,2L7.5,3.5L6,2v14H3v3c0,1.66,1.34,3,3,3h12c1.66,0,3-1.34,3-3V2 L19.5,3.5z M15,20H6c-0.55,0-1-0.45-1-1v-1h10V20z M19,19c0,0.55-0.45,1-1,1s-1-0.45-1-1v-3H8V5h11V19z');
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGRect(x: '9', y: '7', width: '6', height: '2');
        $l0I1->addChild($l1I1);
        $l1I2 = new SVGRect(x: '16', y: '7', width: '2', height: '2');
        $l0I1->addChild($l1I2);
        $l1I3 = new SVGRect(x: '9', y: '10', width: '6', height: '2');
        $l0I1->addChild($l1I3);
        $l1I4 = new SVGRect(x: '16', y: '10', width: '2', height: '2');
        $l0I1->addChild($l1I4);
        $doc->addChild($l0I1);
    }
}
