<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['social'],
    tags: ['instrument', 'keyboard', 'keys', 'music', 'musical', 'piano', 'social'],
)]
final class PianoSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M21,3H3v18h18V3z M13,14.5h1.25V19h-4.5v-4.5H11V5h2V14.5z M5,5h2v9.5h1.25V19H5V5z M19,19h-3.25v-4.5H17V5h2V19z');
        $doc->addChild($l0I1);
    }
}
