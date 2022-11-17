<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['draft', 'fax', 'ink', 'machine', 'office', 'paper', 'print', 'printer', 'send'],
)]
final class PrintTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M8 5h8v3H8z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGCircle(cx: '18', cy: '11.5', r: '1');
        $doc->addChild($l0I2);
        $l0I3 = new SVGPath(d: 'M19 8h-1V3H6v5H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zM8 5h8v3H8V5zm8 14H8v-4h8v4zm4-4h-2v-2H6v2H4v-4c0-.55.45-1 1-1h14c.55 0 1 .45 1 1v4z');
        $doc->addChild($l0I3);
        $l0I4 = new SVGPath(d: 'M6 13h12v2h2v-4c0-.55-.45-1-1-1H5c-.55 0-1 .45-1 1v4h2v-2zm12-2.5c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1z');
        $l0I4->setStyle('opacity', '.3');
        $doc->addChild($l0I4);
    }
}
