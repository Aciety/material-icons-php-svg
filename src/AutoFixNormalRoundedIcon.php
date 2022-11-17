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
    tags: ['auto', 'edit', 'erase', 'fix', 'magic', 'modify', 'normal', 'star', 'stars', 'wand'],
)]
final class AutoFixNormalRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: '0', y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M20.45,6l0.49-1.06L22,4.45c0.39-0.18,0.39-0.73,0-0.91l-1.06-0.49L20.45,2c-0.18-0.39-0.73-0.39-0.91,0l-0.49,1.06 L18,3.55c-0.39,0.18-0.39,0.73,0,0.91l1.06,0.49L19.55,6C19.72,6.39,20.28,6.39,20.45,6z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M17.71,9.12l-2.83-2.83c-0.39-0.39-1.02-0.39-1.41,0L2.29,17.46c-0.39,0.39-0.39,1.02,0,1.41l2.83,2.83 c0.39,0.39,1.02,0.39,1.41,0l11.17-11.17C18.1,10.15,18.1,9.51,17.71,9.12z M14.21,11.21l-1.41-1.41l1.38-1.38l1.41,1.41 L14.21,11.21z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
