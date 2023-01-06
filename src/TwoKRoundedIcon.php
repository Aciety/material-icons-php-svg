<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['av'],
    tags: ['2000', '2K', 'alphabet', 'character', 'digit', 'display', 'font', 'letter', 'number', 'pixel', 'pixels', 'resolution', 'symbol', 'text', 'type', 'video'],
)]
final class TwoKRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M10,12.5H8v1h2.25 c0.41,0,0.75,0.34,0.75,0.75v0c0,0.41-0.34,0.75-0.75,0.75H7.5c-0.55,0-1-0.45-1-1v-1.5c0-0.55,0.45-1,1-1h2v-1H7.25 c-0.41,0-0.75-0.34-0.75-0.75v0C6.5,9.34,6.84,9,7.25,9H10c0.55,0,1,0.45,1,1v1.5C11,12.05,10.55,12.5,10,12.5z M16.59,15L16.59,15 c-0.22,0-0.42-0.1-0.55-0.27l-1.54-1.98v1.55c0,0.39-0.31,0.7-0.7,0.7H13.7c-0.39,0-0.7-0.31-0.7-0.7V9.7C13,9.31,13.31,9,13.7,9 h0.09c0.39,0,0.7,0.31,0.7,0.7v1.55l1.54-1.98C16.17,9.1,16.38,9,16.59,9l0,0c0.58,0,0.91,0.66,0.56,1.12L15.75,12l1.41,1.88 C17.5,14.34,17.17,15,16.59,15z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
