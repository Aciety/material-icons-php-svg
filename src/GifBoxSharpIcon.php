<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['action'],
    tags: ['alphabet', 'animated', 'animation', 'bitmap', 'character', 'font', 'format', 'gif', 'graphics', 'interchange', 'letter', 'symbol', 'text', 'type'],
)]
final class GifBoxSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M21,3H3v18h18V3z M9.5,13v-1h1v2h-3v-4h3v1h-2v2H9.5z M12.5,14h-1v-4h1V14z M16.5,11h-2v0.5H16v1h-1.5V14h-1v-4h3V11z');
        $doc->addChild($l0I1);
    }
}
