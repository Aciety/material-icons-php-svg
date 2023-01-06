<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['accomplish', 'bind', 'circle', 'commit', 'dedicate', 'execute', 'line', 'perform', 'pledge'],
)]
final class CommitRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M21,13c0.55,0,1-0.45,1-1s-0.45-1-1-1h-4.1h0c-0.46-2.28-2.48-4-4.9-4s-4.44,1.72-4.9,4h0H3c-0.55,0-1,0.45-1,1s0.45,1,1,1 h4.1h0c0.46,2.28,2.48,4,4.9,4s4.44-1.72,4.9-4h0H21z M12,15c-1.66,0-3-1.34-3-3s1.34-3,3-3s3,1.34,3,3S13.66,15,12,15z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
