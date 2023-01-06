<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['font', 'help', 'letters', 'save', 'sos', 'text', 'type'],
)]
final class SosRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M13.5,7h-3c-1.1,0-2,0.9-2,2v6c0,1.1,0.9,2,2,2h3c1.1,0,2-0.9,2-2V9C15.5,7.9,14.6,7,13.5,7z M13.5,15h-3V9h3V15z M3,9v2h2 c1.1,0,2,0.9,2,2v2c0,1.1-0.9,2-2,2H2c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1h3v-2H3c-1.1,0-2-0.9-2-2V9c0-1.1,0.9-2,2-2h3 c0.55,0,1,0.45,1,1S6.55,9,6,9H3z M19,9v2h2c1.1,0,2,0.9,2,2v2c0,1.1-0.9,2-2,2h-3c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1h3v-2h-2 c-1.1,0-2-0.9-2-2V9c0-1.1,0.9-2,2-2h3c0.55,0,1,0.45,1,1s-0.45,1-1,1H19z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
