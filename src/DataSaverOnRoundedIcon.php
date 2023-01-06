<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['+', 'add', 'analytics', 'chart', 'data', 'diagram', 'graph', 'infographic', 'measure', 'metrics', 'new', 'on', 'plus', 'ring', 'saver', 'statistics', 'symbol', 'tracking'],
)]
final class DataSaverOnRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M11,11H9c-0.55,0-1,0.45-1,1s0.45,1,1,1h2v2c0,0.55,0.45,1,1,1s1-0.45,1-1v-2h2c0.55,0,1-0.45,1-1s-0.45-1-1-1h-2V9 c0-0.55-0.45-1-1-1s-1,0.45-1,1V11z M12,19c-3.87,0-7-3.13-7-7c0-3.53,2.61-6.43,6-6.92V2.05C5.94,2.55,2,6.81,2,12 c0,5.52,4.47,10,9.99,10c3.31,0,6.24-1.61,8.06-4.09l-2.6-1.53C16.17,17.98,14.21,19,12,19z M13,2.05v3.03c3.39,0.49,6,3.39,6,6.92 c0,0.9-0.18,1.75-0.48,2.54l2.6,1.53C21.68,14.83,22,13.45,22,12C22,6.82,18.05,2.55,13,2.05z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
