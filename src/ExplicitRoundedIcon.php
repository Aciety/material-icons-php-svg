<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['av'],
    tags: ['adult', 'alphabet', 'character', 'content', 'e', 'explicit', 'font', 'language', 'letter', 'media', 'movies', 'music', 'symbol', 'text', 'type'],
)]
final class ExplicitRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 6h-3v2h3c.55 0 1 .45 1 1s-.45 1-1 1h-3v2h3c.55 0 1 .45 1 1s-.45 1-1 1h-4c-.55 0-1-.45-1-1V8c0-.55.45-1 1-1h4c.55 0 1 .45 1 1s-.45 1-1 1z');
        $doc->addChild($l0I0);
    }
}
