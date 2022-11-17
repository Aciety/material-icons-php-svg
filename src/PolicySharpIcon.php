<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['content'],
    tags: ['certified', 'find', 'glass', 'legal', 'look', 'magnify', 'magnifying', 'policy', 'privacy', 'private', 'protect', 'protection', 'search', 'security', 'see', 'shield', 'verified'],
)]
final class PolicySharpIcon extends SVG
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
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M21,5l-9-4L3,5v6c0,5.55,3.84,10.74,9,12c2.3-0.56,4.33-1.9,5.88-3.71l-3.12-3.12c-1.94,1.29-4.58,1.07-6.29-0.64 c-1.95-1.95-1.95-5.12,0-7.07c1.95-1.95,5.12-1.95,7.07,0c1.71,1.71,1.92,4.35,0.64,6.29l2.9,2.9C20.29,15.69,21,13.38,21,11V5z');
        $l1I1->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '12', cy: '12', r: '3');
        $l1I1->addChild($l2I1);
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
