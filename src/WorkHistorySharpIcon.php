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
    tags: ['arrow', 'back', 'backwards', 'bag', 'baggage', 'briefcase', 'business', 'case', 'clock', 'date', 'history', 'job', 'refresh', 'renew', 'reverse', 'rotate', 'schedule', 'suitcase', 'time', 'turn', 'work'],
)]
final class WorkHistorySharpIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M16.66,11.13c2-0.37,3.88,0.11,5.34,1.13V6h-6V2H8v4H2v15h9.68c-0.63-1.33-0.87-2.88-0.52-4.51 C11.75,13.79,13.94,11.63,16.66,11.13z M10,4h4v2h-4V4z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M18,13c-2.76,0-5,2.24-5,5s2.24,5,5,5s5-2.24,5-5S20.76,13,18,13z M19.65,20.35l-2.15-2.15V15h1v2.79l1.85,1.85 L19.65,20.35z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
