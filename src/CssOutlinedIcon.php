<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['alphabet', 'brackets', 'character', 'code', 'css', 'develop', 'developer', 'engineer', 'engineering', 'font', 'html', 'letter', 'platform', 'symbol', 'text', 'type'],
)]
final class CssOutlinedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M9.5,14v-1H11v0.5h2v-1h-2.5c-0.55,0-1-0.45-1-1V10c0-0.55,0.45-1,1-1h3c0.55,0,1,0.45,1,1v1H13v-0.5h-2v1h2.5 c0.55,0,1,0.45,1,1V14c0,0.55-0.45,1-1,1h-3C9.95,15,9.5,14.55,9.5,14z M17,15h3c0.55,0,1-0.45,1-1v-1.5c0-0.55-0.45-1-1-1h-2.5v-1 h2V11H21v-1c0-0.55-0.45-1-1-1h-3c-0.55,0-1,0.45-1,1v1.5c0,0.55,0.45,1,1,1h2.5v1h-2V13H16v1C16,14.55,16.45,15,17,15z M8,10 c0-0.55-0.45-1-1-1H4c-0.55,0-1,0.45-1,1v4c0,0.55,0.45,1,1,1h3c0.55,0,1-0.45,1-1v-1H6.5v0.5h-2v-3h2V11H8V10z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
