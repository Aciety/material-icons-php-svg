<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['color', 'doc', 'edit', 'editing', 'editor', 'emphasize', 'fill', 'flash', 'format', 'highlight', 'light', 'paint', 'sheet', 'spreadsheet', 'style', 'text', 'type', 'writing'],
)]
final class HighlightIcon extends SVG
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M6,14l3,3v5h6v-5l3-3V9H6V14z M11,2h2v3h-2V2z M3.5,5.88l1.41-1.41l2.12,2.12L5.62,8L3.5,5.88z M16.96,6.59l2.12-2.12 l1.41,1.41L18.38,8L16.96,6.59z');
        $l2I0->addChild($l3I0);
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
