<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['assured', 'compliance', 'confidential', 'federal', 'government', 'secure', 'sensitive regulatory', 'workload'],
)]
final class AssuredWorkloadTwoToneIcon extends SVG
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
        $l2I0 = new SVGPolygon(points: [[6.47, 6], [17.53, 6], [12, 3.24]]);
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '5', y: '10', width: '2', height: '7');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '11', y: '10', width: '2', height: '7');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M22,6L12,1L2,6v2h20V6z M6.47,6L12,3.24L17.53,6H6.47z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M2,19v2h12.4c-0.21-0.64-0.32-1.31-0.36-2H2z');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPolygon(points: [[19, 12.26], [19, 10], [17, 10], [17, 13.26]]);
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGPath(d: 'M20,14l-4,2v2.55c0,2.52,1.71,4.88,4,5.45c2.29-0.57,4-2.93,4-5.45V16L20,14z M19.28,21l-2.03-2.03l1.06-1.06l0.97,0.97 l2.41-2.38l1.06,1.06L19.28,21z');
        $l1I0->addChild($l2I6);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
