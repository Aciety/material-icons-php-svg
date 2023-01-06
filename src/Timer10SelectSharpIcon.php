<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['device'],
    tags: ['10', 'alphabet', 'camera', 'character', 'digit', 'font', 'letter', 'number', 'seconds', 'select', 'symbol', 'text', 'timer', 'type'],
)]
final class Timer10SelectSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M13,8v8h-3V8H13 M16,5H7v14h9V5z M1,8h2v11h3V5H1V8z M23,11h-6v5h4v1h-4v2h6v-5h-4v-1h4V11z');
        $doc->addChild($l0I1);
    }
}
