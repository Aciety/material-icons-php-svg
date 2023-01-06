<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;

#[MaterialIcon(
    categories: ['av'],
    tags: ['circle', 'dot', 'fiber', 'manual', 'play', 'record', 'watch'],
)]
final class FiberManualRecordRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGCircle(cx: '12', cy: '12', r: '8');
        $doc->addChild($l0I0);
    }
}
