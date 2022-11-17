<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['alignment', 'fonts', 'format', 'lines', 'list', 'paragraph', 'part', 'piece', 'rule', 'rules', 'segment', 'style', 'text'],
)]
final class SegmentIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M9 18h12v-2H9v2zM3 6v2h18V6H3zm6 7h12v-2H9v2z');
        $doc->addChild($l0I1);
    }
}
