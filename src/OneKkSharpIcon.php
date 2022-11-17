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
    tags: ['10000', '10K', 'alphabet', 'character', 'digit', 'display', 'font', 'letter', 'number', 'pixel', 'pixels', 'resolution', 'symbol', 'text', 'type', 'video'],
)]
final class OneKkSharpIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M10,10.5h1.5v3H10V10.5z M21,3H3v18h18V3z M7.5,15H6v-4.5H4.5V9h3V15z M13,9v6H8.5V9H13z M19,15h-1.75l-1.75-2.25V15H14V9 h1.5v2.25L17.25,9H19l-2.25,3L19,15z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
