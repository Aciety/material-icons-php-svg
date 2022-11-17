<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['alphabet', 'character', 'color', 'doc', 'edit', 'editing', 'editor', 'fill', 'font', 'format', 'letter', 'paint', 'shapes', 'sheet', 'spreadsheet', 'style', 'symbol', 'text', 'type', 'writing'],
)]
final class FormatShapesTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M3 3h2v2H3zm16 16h2v2h-2zm0-16h2v2h-2zM3 19h2v2H3z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M11.29 7l-3.4 9h1.62l.73-2h3.49l.74 2h1.63l-3.41-9h-1.4zm-.6 5.74L12 8.91l1.3 3.83h-2.61zM17 3H7V1H1v6h2v10H1v6h6v-2h10v2h6v-6h-2V7h2V1h-6v2zM3 3h2v2H3V3zm2 18H3v-2h2v2zm16 0h-2v-2h2v2zM19 3h2v2h-2V3zm0 14h-2v2H7v-2H5V7h2V5h10v2h2v10z');
        $doc->addChild($l0I2);
    }
}
