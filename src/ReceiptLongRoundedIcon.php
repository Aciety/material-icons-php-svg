<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['bill', 'check', 'document', 'list', 'long', 'paper', 'paperwork', 'receipt', 'record', 'store', 'transaction'],
)]
final class ReceiptLongRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M14,9h-4C9.45,9,9,8.55,9,8v0c0-0.55,0.45-1,1-1h4c0.55,0,1,0.45,1,1v0C15,8.55,14.55,9,14,9z');
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M14,12h-4c-0.55,0-1-0.45-1-1v0c0-0.55,0.45-1,1-1h4c0.55,0,1,0.45,1,1v0C15,11.55,14.55,12,14,12z');
        $l0I1->addChild($l1I1);
        $l1I2 = new SVGPath(d: 'M19.5,3.5L18,2l-1.5,1.5L15,2l-1.5,1.5L12,2l-1.5,1.5L9,2L7.5,3.5L6,2v14H4c-0.55,0-1,0.45-1,1v2c0,1.66,1.34,3,3,3h12 c1.66,0,3-1.34,3-3V2L19.5,3.5z M15,20H6c-0.55,0-1-0.45-1-1v-1h3h4h3V20z M19,19c0,0.55-0.45,1-1,1s-1-0.45-1-1v-2 c0-0.55-0.45-1-1-1h-2h-2H8V5h11V19z');
        $l0I1->addChild($l1I2);
        $l1I3 = new SVGCircle(cx: '17', cy: '8', r: '1');
        $l0I1->addChild($l1I3);
        $l1I4 = new SVGCircle(cx: '17', cy: '11', r: '1');
        $l0I1->addChild($l1I4);
        $doc->addChild($l0I1);
    }
}
