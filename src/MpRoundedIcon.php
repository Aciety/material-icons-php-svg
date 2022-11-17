<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['alphabet', 'character', 'font', 'image', 'letter', 'megapixel', 'mp', 'photo', 'photography', 'pixels', 'quality', 'resolution', 'symbol', 'text', 'type'],
)]
final class MpRoundedIcon extends SVG
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M7,9h4.5c0.55,0,1,0.45,1,1v4.25 c0,0.41-0.34,0.75-0.75,0.75h0C11.34,15,11,14.66,11,14.25V10.5h-1v2.25c0,0.41-0.34,0.75-0.75,0.75h0 c-0.41,0-0.75-0.34-0.75-0.75V10.5h-1v3.75C7.5,14.66,7.16,15,6.75,15h0C6.34,15,6,14.66,6,14.25V10C6,9.45,6.45,9,7,9z M14.25,15 L14.25,15c-0.41,0-0.75-0.33-0.75-0.75V10c0-0.55,0.45-1,1-1H17c0.55,0,1,0.45,1,1v2.5c0,0.55-0.45,1-1,1h-2v0.75 C15,14.66,14.66,15,14.25,15z M15,12h1.5v-1.5H15V12z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
