<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['hardware'],
    tags: ['arrow', 'capslock', 'keyboard', 'up'],
)]
final class KeyboardCapslockRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M12 8.41l3.89 3.89c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L12.71 6.3c-.39-.39-1.02-.39-1.41 0l-4.6 4.59c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0L12 8.41zM7 18h10c.55 0 1-.45 1-1s-.45-1-1-1H7c-.55 0-1 .45-1 1s.45 1 1 1z');
        $doc->addChild($l0I0);
    }
}
