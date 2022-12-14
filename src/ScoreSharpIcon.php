<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['2k', 'alphabet', 'analytics', 'bar', 'bars', 'character', 'chart', 'data', 'diagram', 'digit', 'font', 'graph', 'infographic', 'letter', 'measure', 'metrics', 'number', 'score', 'statistics', 'symbol', 'text', 'tracking', 'type'],
)]
final class ScoreSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M21 3H3v18h18V3zm-9 2h1.5v3l2-3h1.7l-2 3 2 3h-1.7l-2-3v3H12V5zM7 7.25h2.5V6.5H7V5h4v3.75H8.5v.75H11V11H7V7.25zM19 13l-6 6-4-4-4 4v-2.5l4-4 4 4 6-6V13z');
        $doc->addChild($l0I0);
    }
}
