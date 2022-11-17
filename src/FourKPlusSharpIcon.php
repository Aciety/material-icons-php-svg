<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['av'],
    tags: ['+', '4000', '4K', 'alphabet', 'character', 'digit', 'display', 'font', 'letter', 'number', 'pixel', 'pixels', 'plus', 'resolution', 'symbol', 'text', 'type', 'video'],
)]
final class FourKPlusSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M21,3H3v18h18V3z M11,13.5h-1V15H8.5v-1.5h-3V9H7v3h1.5V9H10v3h1V13.5z M14.75,15L13,12.75V15h-1.5V9H13v2.25L14.75,9h1.75 l-2.25,3l2.25,3H14.75z M19,12.5h-1.5V14h-1v-1.5H15v-1h1.5V10h1v1.5H19V12.5z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
