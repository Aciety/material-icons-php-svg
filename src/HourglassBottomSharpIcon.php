<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['bottom', 'countdown', 'half', 'hourglass', 'loading', 'minute', 'minutes', 'time', 'wait', 'waiting'],
)]
final class HourglassBottomSharpIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M18,22l-0.01-6L14,12l3.99-4.01L18,2H6v6l4,4l-4,3.99V22H18z M8,7.5V4h8v3.5l-4,4L8,7.5z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
