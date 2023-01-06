<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['T', 'alphabet', 'character', 'font', 'header', 'letter', 'subject', 'symbol', 'text', 'title', 'type'],
)]
final class TitleSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M5 4v3h5.5v12h3V7H19V4H5z');
        $doc->addChild($l0I0);
    }
}
