<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['arrow', 'device', 'hardware', 'monitor', 'reset', 'television', 'tv'],
)]
final class ResetTvRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M20,10h-7.01V8.21c0-0.45-0.54-0.67-0.85-0.35l-2.78,2.79c-0.19,0.2-0.19,0.51,0,0.71l2.78,2.79 c0.31,0.32,0.85,0.09,0.85-0.35V12H20v5H4V5h16v2c0,0.55,0.45,1,1,1h0c0.55,0,1-0.45,1-1l0-2c0-1.1-0.9-2-2-2H4C2.9,3,2,3.9,2,5v12 c0,1.1,0.9,2,2,2h4v1c0,0.55,0.45,1,1,1h6c0.55,0,1-0.45,1-1v-1h4c1.1,0,2-0.9,2-2v-5C22,10.9,21.1,10,20,10z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
