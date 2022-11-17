<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['arrow', 'arrows', 'direction', 'directions', 'left', 'maps', 'navigation', 'path', 'roundabout', 'route', 'sign', 'traffic'],
)]
final class RoundaboutLeftRoundedIcon extends SVG
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
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M16,21c-0.55,0-1-0.45-1-1l0-5.09c0-0.98,0.71-1.8,1.67-1.97C18.56,12.63,20,10.98,20,9c0-2.21-1.79-4-4-4 c-1.98,0-3.63,1.44-3.94,3.33C11.89,9.29,11.07,10,10.09,10l-4.26,0l0.88,0.88c0.39,0.39,0.39,1.02,0,1.41 c-0.39,0.39-1.02,0.39-1.41,0L2.71,9.71c-0.39-0.39-0.39-1.02,0-1.41l2.59-2.59c0.39-0.39,1.02-0.39,1.41,0 c0.39,0.39,0.39,1.02,0,1.41L5.83,8l4.25,0c0.48-2.84,2.94-5,5.92-5c3.31,0,6,2.69,6,6c0,2.97-2.16,5.44-5,5.92L17,20 C17,20.55,16.55,21,16,21z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
