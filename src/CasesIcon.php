<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['bag', 'baggage', 'briefcase', 'business', 'case', 'cases', 'purse', 'suitcase'],
)]
final class CasesIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M18 6V4l-2-2h-5L9 4v2H5v11s1 2 2 2h13s2-.98 2-2V6h-4zM4 9H2v11c0 1.11.89 2 2 2h14c1.11 0 2-.89 2-2H4V9zm7-4c0-.55.53-1 1-1h3c.46 0 1 .54 1 1v1h-5V5zM5 6h17v11c0 1.1-.9 2-2 2H7c-1.1 0-2-.9-2-2V6z');
        $doc->addChild($l0I1);
    }
}
