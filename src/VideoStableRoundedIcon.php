<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['image'],
    tags: ['film', 'filming', 'recording', 'setting', 'stability', 'stable', 'taping', 'video'],
)]
final class VideoStableRoundedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M19.96,4.01h-16c-1.1,0-2,0.9-2,2v12c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2v-12C21.96,4.91,21.06,4.01,19.96,4.01z M20,6v12 H4V6H20z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M18.42,9.01L7.92,6.18C7.39,6.04,6.84,6.35,6.7,6.88l-1.85,6.87c-0.14,0.53,0.17,1.08,0.71,1.23l10.5,2.83 c0.53,0.14,1.08-0.17,1.23-0.71l1.85-6.87C19.27,9.7,18.95,9.15,18.42,9.01z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
