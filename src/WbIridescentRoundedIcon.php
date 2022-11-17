<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['balance', 'bright', 'edit', 'editing', 'iridescent', 'light', 'lighting', 'setting', 'settings', 'white', 'wp'],
)]
final class WbIridescentRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M6 15h12c.55 0 1-.45 1-1v-3.95c0-.55-.45-1-1-1H6c-.55 0-1 .45-1 1V14c0 .55.45 1 1 1zm5-13v1.05c0 .55.45.95 1 .95s1-.4 1-.95V2c0-.55-.45-1-1-1s-1 .45-1 1zm7.34 2.3l-.38.38c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0l.38-.38c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0zM13 22v-.96c0-.55-.45-1-1-1s-1 .45-1 1V22c0 .55.45 1 1 1s1-.45 1-1zm6.74-3.61l-.39-.39c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l.38.39c.39.39 1.02.39 1.41 0l.01-.01c.39-.38.39-1.02 0-1.4zM4.25 5.71l.39.39c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41l-.39-.39c-.39-.39-1.02-.39-1.41 0-.38.39-.38 1.03 0 1.41zm1.42 14.08l.38-.38c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0l-.38.38c-.39.39-.39 1.02 0 1.41.38.39 1.02.39 1.41 0z');
        $doc->addChild($l0I1);
    }
}
