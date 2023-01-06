<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['av'],
    tags: ['adjustment', 'analytics', 'chart', 'data', 'equalizer', 'graph', 'measure', 'metrics', 'music', 'noise', 'sound', 'static', 'statistics', 'tracking', 'volume'],
)]
final class EqualizerTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M16 9h4v11h-4zm-6-5h4v16h-4zm-6 8h4v8H4z');
        $doc->addChild($l0I1);
    }
}
