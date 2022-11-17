<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['places'],
    tags: ['arrow', 'attach', 'automobile', 'automotive', 'back', 'car', 'cars', 'connect', 'direction', 'hookup', 'left', 'maps', 'public', 'right', 'rv', 'trailer', 'transportation', 'travel', 'truck', 'van', 'vehicle'],
)]
final class RvHookupSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20 17V9H7V7l-3 3 3 3v-2h4v3H4v5h4c0 1.66 1.34 3 3 3s3-1.34 3-3h8v-2h-2zm-9 3c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm7-6h-4v-3h4v3zM17 2v2H9v2h8v2l3-3-3-3z');
        $doc->addChild($l0I1);
    }
}
