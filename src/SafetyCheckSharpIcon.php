<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['certified', 'check', 'clock', 'privacy', 'private', 'protect', 'protection', 'safety', 'schedule', 'security', 'shield', 'time', 'verified'],
)]
final class SafetyCheckSharpIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M12,2L4,5v6.09c0,5.05,3.41,9.76,8,10.91c4.59-1.15,8-5.86,8-10.91V5L12,2z M12,17c-2.76,0-5-2.24-5-5s2.24-5,5-5 s5,2.24,5,5S14.76,17,12,17z M13.65,14.35l-2.15-2.15V9h1v2.79l1.85,1.85L13.65,14.35z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
