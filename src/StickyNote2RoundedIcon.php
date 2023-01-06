<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['action'],
    tags: ['2', 'bookmark', 'mark', 'message', 'note', 'paper', 'sticky', 'text', 'writing'],
)]
final class StickyNote2RoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M19,3H4.99C3.89,3,3,3.9,3,5l0.01,14c0,1.1,0.89,2,1.99,2h10l6-6V5C21,3.9,20.1,3,19,3z M8,8h8c0.55,0,1,0.45,1,1v0 c0,0.55-0.45,1-1,1H8c-0.55,0-1-0.45-1-1v0C7,8.45,7.45,8,8,8z M11,14H8c-0.55,0-1-0.45-1-1v0c0-0.55,0.45-1,1-1h3 c0.55,0,1,0.45,1,1v0C12,13.55,11.55,14,11,14z M14,19.5V15c0-0.55,0.45-1,1-1h4.5L14,19.5z');
        $doc->addChild($l0I1);
    }
}
