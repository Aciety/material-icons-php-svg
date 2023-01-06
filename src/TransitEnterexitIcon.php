<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['arrow', 'direction', 'enterexit', 'maps', 'navigation', 'route', 'transit', 'transportation'],
)]
final class TransitEnterexitIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M16 18H6V8h3v4.77L15.98 6 18 8.03 11.15 15H16v3z');
        $doc->addChild($l0I1);
    }
}
