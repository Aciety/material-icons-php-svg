<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['navigation'],
    tags: ['analytics', 'arrow', 'arrows', 'bar', 'bars', 'chart', 'data', 'diagram', 'direction', 'drive', 'edit', 'editing', 'graph', 'grid', 'infographic', 'measure', 'metrics', 'pivot', 'rotate', 'sheet', 'statistics', 'table', 'tracking'],
)]
final class PivotTableChartRoundedIcon extends SVG
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M21,5c0-1.1-0.9-2-2-2h-9v5h11V5z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M3,19c0,1.1,0.9,2,2,2h3V10H3V19z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M3,5v3h5V3H5C3.9,3,3,3.9,3,5z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M17.65,9.35l-2.79,2.79C14.54,12.46,14.76,13,15.21,13H17v2c0,1.1-0.9,2-2,2h-2v-1.79c0-0.45-0.54-0.67-0.85-0.35 l-2.79,2.79c-0.2,0.2-0.2,0.51,0,0.71l2.79,2.79c0.31,0.31,0.85,0.09,0.85-0.35V19h2c2.21,0,4-1.79,4-4v-2h1.79 c0.45,0,0.67-0.54,0.35-0.85l-2.79-2.79C18.16,9.16,17.84,9.16,17.65,9.35z');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
