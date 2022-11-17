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
    tags: ['+', '5000', '5K', 'alphabet', 'character', 'digit', 'display', 'font', 'letter', 'number', 'pixel', 'pixels', 'plus', 'resolution', 'symbol', 'text', 'type', 'video'],
)]
final class FiveKPlusRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M9.25,10.5H7.5v1H9 c0.55,0,1,0.45,1,1V14c0,0.55-0.45,1-1,1H6.75C6.34,15,6,14.66,6,14.25v0c0-0.41,0.34-0.75,0.75-0.75H8.5v-1H7c-0.55,0-1-0.45-1-1 V10c0-0.55,0.45-1,1-1h2.25C9.66,9,10,9.34,10,9.75v0C10,10.16,9.66,10.5,9.25,10.5z M14.59,15L14.59,15 c-0.22,0-0.42-0.1-0.55-0.27l-1.54-1.98v1.5c0,0.41-0.34,0.75-0.75,0.75h0C11.34,15,11,14.66,11,14.25v-4.5 C11,9.34,11.34,9,11.75,9h0c0.41,0,0.75,0.34,0.75,0.75v1.5l1.54-1.98C14.17,9.1,14.38,9,14.59,9h0c0.58,0,0.91,0.66,0.56,1.12 L13.75,12l1.41,1.88C15.5,14.34,15.17,15,14.59,15z M18.5,12.5h-1v1c0,0.28-0.22,0.5-0.5,0.5l0,0c-0.28,0-0.5-0.22-0.5-0.5v-1h-1 c-0.28,0-0.5-0.22-0.5-0.5v0c0-0.28,0.22-0.5,0.5-0.5h1v-1c0-0.28,0.22-0.5,0.5-0.5l0,0c0.28,0,0.5,0.22,0.5,0.5v1h1 c0.28,0,0.5,0.22,0.5,0.5v0C19,12.28,18.78,12.5,18.5,12.5z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
