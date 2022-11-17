<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['search'],
    tags: ['bed', 'bedroom', 'double', 'full', 'furniture', 'home', 'hotel', 'house', 'king', 'night', 'pillows', 'queen', 'rest', 'room', 'size', 'sleep'],
)]
final class BedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M21 10.78V8c0-1.65-1.35-3-3-3h-4c-.77 0-1.47.3-2 .78-.53-.48-1.23-.78-2-.78H6C4.35 5 3 6.35 3 8v2.78c-.61.55-1 1.34-1 2.22v6h2v-2h16v2h2v-6c0-.88-.39-1.67-1-2.22zM14 7h4c.55 0 1 .45 1 1v2h-6V8c0-.55.45-1 1-1zM5 8c0-.55.45-1 1-1h4c.55 0 1 .45 1 1v2H5V8z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
