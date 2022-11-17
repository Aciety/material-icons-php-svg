<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['diving', 'entertainment', 'exercise', 'hobby', 'scuba', 'social', 'swim', 'swimming'],
)]
final class ScubaDivingRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M1,13c0-1.1,0.9-2,2-2s2,0.9,2,2s-0.9,2-2,2S1,14.1,1,13z M8.89,10.11l3.56-0.95c0.53-0.14,0.85-0.69,0.71-1.22L12.9,6.97 c-0.14-0.53-0.69-0.85-1.22-0.71L8.11,7.21c-0.8,0.21-1.28,1.04-1.06,1.84l0,0C7.27,9.85,8.09,10.33,8.89,10.11z M22.52,2.52 c-0.29-0.29-0.75-0.29-1.04,0L19,5l-2,4l-9.48,2.87c-0.82,0.2-1.39,0.89-1.5,1.68L5.24,18L3,21c-0.33,0.44-0.24,1.07,0.2,1.4 c0.44,0.33,1.07,0.24,1.4-0.2L7,19l1.14-3.14l5.57-1.77c0.19-0.06,0.38-0.15,0.54-0.27l4.2-2.94c0.36-0.25,0.62-0.61,0.75-1.02 L20.5,5.9l2.06-2.38C22.81,3.22,22.79,2.79,22.52,2.52z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
