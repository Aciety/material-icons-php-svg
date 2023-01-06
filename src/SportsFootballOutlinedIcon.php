<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['social'],
    tags: ['athlete', 'athletic', 'ball', 'entertainment', 'exercise', 'football', 'game', 'hobby', 'social', 'sports'],
)]
final class SportsFootballOutlinedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M20.31,3.69C19.99,3.36,18.37,3,16.26,3c-3.03,0-7.09,0.75-9.8,3.46C1.87,11.05,2.9,19.52,3.69,20.31 C4.01,20.64,5.63,21,7.74,21c3.03,0,7.09-0.75,9.8-3.46C22.13,12.95,21.1,4.48,20.31,3.69z M7.74,19c-1.14,0-2.02-0.12-2.53-0.23 c-0.18-0.79-0.3-2.21-0.17-3.83l4.01,4.01C8.53,18.99,8.08,19,7.74,19z M16.13,16.13c-1.33,1.33-3.06,2.05-4.66,2.44l-6.04-6.04 c0.42-1.68,1.16-3.37,2.45-4.65c1.32-1.32,3.05-2.04,4.64-2.43l6.05,6.05C18.15,13.17,17.4,14.85,16.13,16.13z M18.96,9.09 l-4.03-4.03C15.45,5.01,15.91,5,16.26,5c1.14,0,2.02,0.12,2.53,0.23C18.97,6.02,19.09,7.45,18.96,9.09z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '8.04', y: '11.01', width: '7.92', height: '1.98');
        $l2I1->setAttribute('transform', 'matrix(0.7071 -0.7071 0.7071 0.7071 -4.9706 12.0001)');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
