<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['device'],
    tags: ['3', 'alphabet', 'camera', 'character', 'digit', 'font', 'letter', 'number', 'seconds', 'select', 'symbol', 'text', 'timer', 'type'],
)]
final class Timer3SelectIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M21,11v2h-4v1h2.5c0.83,0,1.5,0.68,1.5,1.5v2c0,0.83-0.67,1.5-1.5,1.5H15v-2h4v-1h-2.5c-0.82,0-1.5-0.68-1.5-1.5v-2 c0-0.82,0.68-1.5,1.5-1.5H21z M4,5v3h6v2.5H4v3h6V16H4v3h6c1.66,0,3-1.34,3-3v-1.9c0-1.16-0.94-2.1-2.1-2.1c1.16,0,2.1-0.94,2.1-2.1 V8c0-1.66-1.34-3-3-3H4z');
        $doc->addChild($l0I1);
    }
}
