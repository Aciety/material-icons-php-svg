<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['places'],
    tags: ['backyard', 'barrier', 'boundaries', 'boundary', 'fence', 'home', 'house', 'protection', 'yard'],
)]
final class FenceRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M21,11L21,11c0-0.55-0.45-1-1-1h-1V7l-2.29-2.29c-0.39-0.39-1.02-0.39-1.41,0L14,6l-1.29-1.29c-0.39-0.39-1.02-0.39-1.41,0 L10,6L8.71,4.71c-0.39-0.39-1.02-0.39-1.41,0L5,7v3H4c-0.55,0-1,0.45-1,1v0c0,0.55,0.45,1,1,1h1v2H4c-0.55,0-1,0.45-1,1v0 c0,0.55,0.45,1,1,1h1v3c0,0.55,0.45,1,1,1h12c0.55,0,1-0.45,1-1v-3h1c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1h-1v-2h1 C20.55,12,21,11.55,21,11z M16,6.83l1,1V10h-2V7.83l0.41-0.41L16,6.83z M12,6.83l0.59,0.59L13,7.83V10h-2V7.83l0.41-0.41L12,6.83z M11,14v-2h2v2H11z M13,16v2h-2v-2H13z M7,7.83l1-1l0.59,0.59L9,7.83V10H7V7.83z M7,12h2v2H7V12z M7,16h2v2H7V16z M17,18h-2v-2h2 V18z M17,14h-2v-2h2V14z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
