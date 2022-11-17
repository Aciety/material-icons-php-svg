<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['analytics', 'bar', 'chart', 'data', 'diagram', 'graph', 'infographic', 'measure', 'metrics', 'statistics', 'tracking'],
)]
final class BarChartRoundedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M6,20L6,20c1.1,0,2-0.9,2-2v-7c0-1.1-0.9-2-2-2h0c-1.1,0-2,0.9-2,2v7C4,19.1,4.9,20,6,20z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M16,15v3c0,1.1,0.9,2,2,2h0c1.1,0,2-0.9,2-2v-3c0-1.1-0.9-2-2-2h0C16.9,13,16,13.9,16,15z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M12,20L12,20c1.1,0,2-0.9,2-2V6c0-1.1-0.9-2-2-2h0c-1.1,0-2,0.9-2,2v12C10,19.1,10.9,20,12,20z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
