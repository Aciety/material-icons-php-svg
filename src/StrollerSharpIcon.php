<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['places'],
    tags: ['baby', 'care', 'carriage', 'child', 'children', 'infant', 'kid', 'newborn', 'stroller', 'toddler', 'young'],
)]
final class StrollerSharpIcon extends SVG
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
        $l1I1 = new SVGPath(d: 'M18,20c0,1.1-0.9,2-2,2s-2-0.9-2-2s0.9-2,2-2S18,18.9,18,20z M6,18c-1.1,0-2,0.9-2,2s0.9,2,2,2s2-0.9,2-2S7.1,18,6,18z M22,7V6.48C22,4.56,20.52,3,18.65,3c-1.66,0-2.54,1.27-3.18,2.03L5.27,17H17V6.27C17.58,5.59,17.97,5,18.65,5 C19.42,5,20,5.66,20,6.48V7H22z M14.3,4.1C13.03,3.4,11.56,3,10,3C8.03,3,6.21,3.64,4.72,4.72l4.89,4.89L14.3,4.1z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
