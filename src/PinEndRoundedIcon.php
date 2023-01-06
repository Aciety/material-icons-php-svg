<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['action'],
    tags: ['action', 'arrow', 'dot', 'end', 'pin'],
)]
final class PinEndRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20,12V6H4v12h10l0,2H4c-1.1,0-2-0.9-2-2V6c0-1.1,0.9-2,2-2h16c1.1,0,2,0.9,2,2v6H20z M19,14c-1.66,0-3,1.34-3,3s1.34,3,3,3 c1.66,0,3-1.34,3-3S20.66,14,19,14z M14.66,13.66c0.39-0.39,0.39-1.02,0-1.41l-2.12-2.12l1.27-1.27C14.12,8.54,13.9,8,13.45,8H9.5 C9.22,8,9,8.22,9,8.5v3.95c0,0.45,0.54,0.67,0.85,0.35l1.27-1.27l2.12,2.12C13.63,14.05,14.27,14.05,14.66,13.66z');
        $doc->addChild($l0I1);
    }
}
