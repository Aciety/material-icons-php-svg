<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['social'],
    tags: ['athlete', 'athletic', 'ball', 'entertainment', 'exercise', 'game', 'hobby', 'rugby', 'social', 'sports'],
)]
final class SportsRugbyOutlinedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M20.49,3.51c-0.56-0.56-2.15-0.97-4.16-0.97c-3.08,0-7.15,0.96-9.98,3.79C1.66,11.03,2.1,19.07,3.51,20.49 c0.56,0.56,2.15,0.97,4.16,0.97c3.08,0,7.15-0.96,9.98-3.79C22.34,12.97,21.9,4.93,20.49,3.51z M5.71,18.29 c0.63-1.89,2.16-4.99,4.87-7.7c2.68-2.68,5.78-4.23,7.7-4.88c-0.63,1.89-2.16,4.99-4.88,7.7C10.74,16.09,7.64,17.64,5.71,18.29z M7.76,7.76c2.64-2.64,6.34-3.12,8.03-3.19c-2.05,0.94-4.46,2.46-6.61,4.61c-2.16,2.16-3.67,4.58-4.61,6.63 C4.66,13.33,5.44,10.07,7.76,7.76z M16.24,16.24c-2.64,2.64-6.34,3.12-8.03,3.19c2.05-0.94,4.46-2.46,6.61-4.61 c2.16-2.16,3.67-4.58,4.62-6.63C19.34,10.67,18.56,13.93,16.24,16.24z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
