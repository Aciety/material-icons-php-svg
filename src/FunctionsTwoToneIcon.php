<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['average', 'calculate', 'count', 'custom', 'doc', 'edit', 'editing', 'editor', 'functions', 'math', 'sheet', 'spreadsheet', 'style', 'sum', 'text', 'type', 'writing'],
)]
final class FunctionsTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M18 17h-7l5-5-5-5h7V4H6v2l6.5 6L6 18v2h12z');
        $doc->addChild($l0I1);
    }
}
