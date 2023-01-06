<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['social'],
    tags: ['athlete', 'athletic', 'body', 'downhill', 'entertainment', 'exercise', 'hobby', 'human', 'people', 'person', 'ski social', 'skiing', 'snow', 'sports', 'travel', 'winter'],
)]
final class DownhillSkiingTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M18.5,4.5c0,1.1-0.9,2-2,2s-2-0.9-2-2s0.9-2,2-2S18.5,3.4,18.5,4.5z M15.78,20.9l0.76,0.27c0.62,0.21,1.27,0.33,1.96,0.33 c0.84,0,1.65-0.18,2.38-0.5L22,22.13C20.95,22.68,19.76,23,18.5,23c-0.86,0-1.68-0.14-2.45-0.41L2,17.47l0.5-1.41l6.9,2.51 l1.72-4.44L7.55,10.4C6.66,9.46,6.88,7.93,8,7.28l3.48-2.01c1.1-0.64,2.52-0.1,2.91,1.11l0.33,1.08c0.44,1.42,1.48,2.57,2.83,3.14 L18.07,9l1.43,0.46l-1.12,3.45c-2.45-0.4-4.48-2.07-5.38-4.32l-2.53,1.45l3.03,3.46l-2.22,5.76l3.09,1.12l2.1-6.44h0l0,0 c0.46,0.18,0.94,0.31,1.44,0.41L15.78,20.9z');
        $doc->addChild($l0I1);
    }
}
