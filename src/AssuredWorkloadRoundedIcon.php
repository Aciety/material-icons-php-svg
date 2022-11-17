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
    tags: ['assured', 'compliance', 'confidential', 'federal', 'government', 'secure', 'sensitive regulatory', 'workload'],
)]
final class AssuredWorkloadRoundedIcon extends SVG
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M6,17c0.55,0,1-0.45,1-1v-5c0-0.55-0.45-1-1-1h0c-0.55,0-1,0.45-1,1v5C5,16.55,5.45,17,6,17L6,17z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M12,17c0.55,0,1-0.45,1-1v-5c0-0.55-0.45-1-1-1h0c-0.55,0-1,0.45-1,1v5C11,16.55,11.45,17,12,17L12,17z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M21.32,5.66l-8.42-4.21c-0.56-0.28-1.23-0.28-1.79,0L2.68,5.66C2.26,5.87,2,6.3,2,6.76v0C2,7.45,2.55,8,3.24,8h17.53 C21.45,8,22,7.45,22,6.76v0C22,6.3,21.74,5.87,21.32,5.66z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M2,20L2,20c0,0.55,0.45,1,1,1h11.4c-0.21-0.64-0.32-1.31-0.36-2H3C2.45,19,2,19.45,2,20z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M19,12.26V11c0-0.55-0.45-1-1-1h0c-0.55,0-1,0.45-1,1v2.26L19,12.26z');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M19.55,14.22l-3,1.5C16.21,15.89,16,16.24,16,16.62v1.93c0,2.52,1.71,4.88,4,5.45c2.29-0.57,4-2.93,4-5.45v-1.93 c0-0.38-0.21-0.73-0.55-0.89l-3-1.5C20.17,14.08,19.83,14.08,19.55,14.22z M18.58,20.3l-0.8-0.8c-0.29-0.29-0.29-0.77,0-1.06l0,0 c0.29-0.29,0.77-0.29,1.06,0l0.44,0.44l1.88-1.85c0.29-0.29,0.77-0.29,1.06,0l0,0c0.29,0.29,0.29,0.77,0,1.06l-2.23,2.21 C19.6,20.69,18.97,20.69,18.58,20.3z');
        $l1I0->addChild($l2I5);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
