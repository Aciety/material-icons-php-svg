<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['av'],
    tags: ['adjustment', 'analytics', 'chart', 'data', 'equalizer', 'graph', 'measure', 'metrics', 'music', 'noise', 'sound', 'static', 'statistics', 'tracking', 'volume'],
)]
final class EqualizerIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M10 20h4V4h-4v16zm-6 0h4v-8H4v8zM16 9v11h4V9h-4z');
        $doc->addChild($l0I1);
    }
}
