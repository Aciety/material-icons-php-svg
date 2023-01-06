<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['av'],
    tags: ['accessible', 'alphabet', 'caption', 'cc', 'character', 'closed', 'decoder', 'font', 'language', 'letter', 'media', 'movies', 'off', 'outline', 'subtitle', 'subtitles', 'symbol', 'text', 'tv', 'type'],
)]
final class ClosedCaptionOffRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M19,4H5C3.89,4,3,4.9,3,6v12c0,1.1,0.89,2,2,2h14c1.1,0,2-0.9,2-2V6C21,4.9,20.1,4,19,4z M11,10.5 c0,0.28-0.22,0.5-0.5,0.5H10c-0.28,0-0.5-0.22-0.5-0.5h-2v3h2c0-0.28,0.22-0.5,0.5-0.5h0.5c0.28,0,0.5,0.22,0.5,0.5V14 c0,0.55-0.45,1-1,1H7c-0.55,0-1-0.45-1-1v-4c0-0.55,0.45-1,1-1h3c0.55,0,1,0.45,1,1V10.5z M18,10.5c0,0.28-0.22,0.5-0.5,0.5H17 c-0.28,0-0.5-0.22-0.5-0.5h-2v3h2c0-0.28,0.22-0.5,0.5-0.5h0.5c0.28,0,0.5,0.22,0.5,0.5V14c0,0.55-0.45,1-1,1h-3 c-0.55,0-1-0.45-1-1v-4c0-0.55,0.45-1,1-1h3c0.55,0,1,0.45,1,1V10.5z');
        $l1I0->addChild($l2I0);
        $l1I0->setStyle('enable-background', 'new');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
