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
    tags: ['7000', '7K', 'alphabet', 'character', 'digit', 'display', 'font', 'letter', 'number', 'pixel', 'pixels', 'resolution', 'symbol', 'text', 'type', 'video'],
)]
final class SevenKRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M8.95,15H8.76 c-0.5,0-0.86-0.49-0.72-0.97l1.08-3.53H7.25c-0.41,0-0.75-0.34-0.75-0.75v0C6.5,9.34,6.84,9,7.25,9H10c0.67,0,1.15,0.65,0.96,1.29 l-1.3,4.18C9.57,14.79,9.28,15,8.95,15z M16.59,15L16.59,15c-0.22,0-0.42-0.1-0.55-0.27l-1.54-1.98v1.55c0,0.39-0.31,0.7-0.7,0.7 H13.7c-0.39,0-0.7-0.31-0.7-0.7V9.7C13,9.31,13.31,9,13.7,9h0.09c0.39,0,0.7,0.31,0.7,0.7v1.55l1.54-1.98 C16.17,9.1,16.38,9,16.59,9l0,0c0.58,0,0.91,0.66,0.56,1.12L15.75,12l1.41,1.88C17.5,14.34,17.17,15,16.59,15z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
