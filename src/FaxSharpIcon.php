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
    tags: ['fax', 'machine', 'office', 'phone', 'send'],
)]
final class FaxSharpIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M22,9h-4V4H8v14.5V20h14V9z M10,6h6v3h-6V6z M14,17h-4v-5h4V17z M16,17c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1s1,0.45,1,1 C17,16.55,16.55,17,16,17z M16,14c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1s1,0.45,1,1C17,13.55,16.55,14,16,14z M19,17 c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1s1,0.45,1,1C20,16.55,19.55,17,19,17z M19,14c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1 s1,0.45,1,1C20,13.55,19.55,14,19,14z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '2', y: '8', width: '5', height: '13');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
