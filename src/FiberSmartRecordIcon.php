<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['av'],
    tags: ['circle', 'dot', 'fiber', 'play', 'record', 'smart', 'watch'],
)]
final class FiberSmartRecordIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M24 24H0V0h24v24z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGCircle(cx: '9', cy: '12', r: '8');
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M17 4.26v2.09c2.33.82 4 3.04 4 5.65s-1.67 4.83-4 5.65v2.09c3.45-.89 6-4.01 6-7.74s-2.55-6.85-6-7.74z');
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
