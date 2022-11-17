<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['search'],
    tags: ['bed', 'bedroom', 'double', 'full', 'furniture', 'home', 'hotel', 'house', 'king', 'night', 'pillows', 'queen', 'rest', 'room', 'size', 'sleep'],
)]
final class BedTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M19 8c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v2h6V8zm-8 0c0-.55-.45-1-1-1H6c-.55 0-1 .45-1 1v2h6V8zm8 4H5c-.55 0-1 .45-1 1v2h16v-2c0-.55-.45-1-1-1z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M21 10.78V8c0-1.65-1.35-3-3-3h-4c-.77 0-1.47.3-2 .78-.53-.48-1.23-.78-2-.78H6C4.35 5 3 6.35 3 8v2.78c-.61.55-1 1.34-1 2.22v6h2v-2h16v2h2v-6c0-.88-.39-1.67-1-2.22zM13 8c0-.55.45-1 1-1h4c.55 0 1 .45 1 1v2h-6V8zM5 8c0-.55.45-1 1-1h4c.55 0 1 .45 1 1v2H5V8zm15 7H4v-2c0-.55.45-1 1-1h14c.55 0 1 .45 1 1v2z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
