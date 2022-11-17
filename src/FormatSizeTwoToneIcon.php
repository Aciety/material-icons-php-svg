<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['alphabet', 'character', 'color', 'doc', 'edit', 'editing', 'editor', 'fill', 'font', 'format', 'letter', 'paint', 'sheet', 'size', 'spreadsheet', 'style', 'symbol', 'text', 'type', 'writing'],
)]
final class FormatSizeTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M3 12h3v7h3v-7h3V9H3zm6-5h5v12h3V7h5V4H9z');
        $doc->addChild($l0I1);
    }
}
