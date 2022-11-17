<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['(scan)', '[cellular', 'connection', 'data', 'detect', 'discover', 'find', 'internet', 'look', 'magnifying glass', 'mobile]', 'network', 'notice', 'search', 'service', 'signal', 'wifi', 'wireless'],
)]
final class WifiFindRoundedIcon extends SVG
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
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M11,14c0-3.36,2.64-6,6-6c2.2,0,4.08,1.13,5.13,2.86l0.36-0.37c0.86-0.86,0.76-2.27-0.2-3.01C19.44,5.3,15.87,4,12,4 C8.13,4,4.56,5.3,1.71,7.48c-0.96,0.74-1.06,2.15-0.2,3.01l9.08,9.09c0.78,0.78,2.05,0.78,2.83,0l0.45-0.45 C12.14,18.09,11,16.2,11,14z');
        $l2I0->addChild($l3I0);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M20.44,16.03C20.79,15.44,21,14.75,21,14c0-2.24-1.76-4-4-4s-4,1.76-4,4c0,2.24,1.76,4,4,4c0.75,0,1.44-0.21,2.03-0.56 l1.85,1.85c0.39,0.39,1.02,0.39,1.41,0c0.39-0.39,0.39-1.02,0-1.41L20.44,16.03z M17,16c-1.12,0-2-0.88-2-2c0-1.12,0.88-2,2-2 s2,0.88,2,2C19,15.12,18.12,16,17,16z');
        $l2I1->addChild($l3I0);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
