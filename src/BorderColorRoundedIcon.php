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
final class BorderColorRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M20,24H4c-1.1,0-2-0.9-2-2v0c0-1.1,0.9-2,2-2h16c1.1,0,2,0.9,2,2v0C22,23.1,21.1,24,20,24z M13.06,5.19l3.75,3.75l-8.77,8.77C7.86,17.9,7.6,18,7.34,18H5c-0.55,0-1-0.45-1-1v-2.34c0-0.27,0.11-0.52,0.29-0.71L13.06,5.19z M17.88,7.87l-3.75-3.75l1.83-1.83c0.39-0.39,1.02-0.39,1.41,0l2.34,2.34c0.39,0.39,0.39,1.02,0,1.41L17.88,7.87z');
        $l1I0->setStyle('enable-background', 'new');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
