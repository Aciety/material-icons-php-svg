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
final class ClosedCaptionOffOutlinedIcon extends SvgIcon
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
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M19,4H5C3.89,4,3,4.9,3,6v12c0,1.1,0.89,2,2,2h14c1.1,0,2-0.9,2-2V6C21,4.9,20.1,4,19,4z M19,18H5V6h14V18z');
        $l2I0->addChild($l3I0);
        $l3I1 = new SVGPath(d: 'M7,15h3c0.55,0,1-0.45,1-1v-1H9.5v0.5h-2v-3h2V11H11v-1c0-0.55-0.45-1-1-1H7c-0.55,0-1,0.45-1,1v4C6,14.55,6.45,15,7,15z');
        $l2I0->addChild($l3I1);
        $l3I2 = new SVGPath(d: 'M14,15h3c0.55,0,1-0.45,1-1v-1h-1.5v0.5h-2v-3h2V11H18v-1c0-0.55-0.45-1-1-1h-3c-0.55,0-1,0.45-1,1v4 C13,14.55,13.45,15,14,15z');
        $l2I0->addChild($l3I2);
        $l1I0->addChild($l2I0);
        $l1I0->setStyle('enable-background', 'new');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
