<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['all', 'border', 'doc', 'edit', 'editing', 'editor', 'pen', 'pencil', 'sheet', 'spreadsheet', 'stroke', 'text', 'type', 'writing'],
)]
final class BorderColorSharpIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M22,24H2v-4h20V24z M13.06,5.19l3.75,3.75L7.75,18H4v-3.75L13.06,5.19z M17.88,7.87 l-3.75-3.75l2.53-2.54l3.75,3.75L17.88,7.87z');
        $l1I0->setStyle('enable-background', 'new');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
