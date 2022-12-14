<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['alcohol', 'bar', 'cocktail', 'cup', 'drink', 'glass', 'liquor', 'wine'],
)]
final class WineBarRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M7,3C6.45,3,6,3.45,6,4l0,5c0,2.97,2.16,5.43,5,5.91V19H9c-0.55,0-1,0.45-1,1v0c0,0.55,0.45,1,1,1h6c0.55,0,1-0.45,1-1v0 c0-0.55-0.45-1-1-1h-2v-4.09c2.84-0.48,5-2.94,5-5.91l0-5c0-0.55-0.45-1-1-1H7z M16,8H8l0-3h8C16,5,16,8,16,8z');
        $doc->addChild($l0I1);
    }
}
