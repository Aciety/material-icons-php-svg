<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['barcode', 'camera', 'code', 'media', 'product', 'qr', 'quick', 'response', 'smartphone', 'url', 'urls'],
)]
final class QrCodeIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M3,11h8V3H3V11z M5,5h4v4H5V5z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M3,21h8v-8H3V21z M5,15h4v4H5V15z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M13,3v8h8V3H13z M19,9h-4V5h4V9z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '19', y: '19', width: '2', height: '2');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGRect(x: '13', y: '13', width: '2', height: '2');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGRect(x: '15', y: '15', width: '2', height: '2');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGRect(x: '13', y: '17', width: '2', height: '2');
        $l1I0->addChild($l2I6);
        $l2I7 = new SVGRect(x: '15', y: '19', width: '2', height: '2');
        $l1I0->addChild($l2I7);
        $l2I8 = new SVGRect(x: '17', y: '17', width: '2', height: '2');
        $l1I0->addChild($l2I8);
        $l2I9 = new SVGRect(x: '17', y: '13', width: '2', height: '2');
        $l1I0->addChild($l2I9);
        $l2I10 = new SVGRect(x: '19', y: '15', width: '2', height: '2');
        $l1I0->addChild($l2I10);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
