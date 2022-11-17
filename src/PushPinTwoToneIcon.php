<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['content'],
    tags: ['location', 'marker', 'pin', 'place', 'push', 'remember', 'save'],
)]
final class PushPinTwoToneIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M14,4h-4v5c0,1.1-0.35,2.14-1,3h6c-0.63-0.84-1-1.88-1-3V4z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M19,12c-1.66,0-3-1.34-3-3V4l1,0c0,0,0,0,0,0c0.55,0,1-0.45,1-1s-0.45-1-1-1H7C6.45,2,6,2.45,6,3s0.45,1,1,1c0,0,0,0,0,0 l1,0v5c0,1.66-1.34,3-3,3v2h5.97v7l1,1l1-1v-7H19L19,12C19,12,19,12,19,12z M9,12c0.65-0.86,1-1.9,1-3V4h4v5c0,1.12,0.37,2.16,1,3 H9z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
