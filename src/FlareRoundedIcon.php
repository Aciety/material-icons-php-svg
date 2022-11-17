<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['bright', 'edit', 'editing', 'effect', 'flare', 'image', 'images', 'light', 'photography', 'picture', 'pictures', 'sparkle', 'sun'],
)]
final class FlareRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M6 11H2c-.55 0-1 .45-1 1s.45 1 1 1h4c.55 0 1-.45 1-1s-.45-1-1-1zm2.47-3.94l-.72-.72c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l.71.71c.39.39 1.02.39 1.41 0 .39-.38.39-1.02.01-1.4zM12 1c-.56 0-1 .45-1 1v4c0 .55.45 1 1 1s1-.45 1-1V2c0-.55-.45-1-1-1zm5.66 5.35c-.39-.39-1.02-.39-1.41 0l-.71.71c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0l.71-.71c.38-.39.38-1.03 0-1.41zM17 12c0 .56.45 1 1 1h4c.55 0 1-.45 1-1s-.45-1-1-1h-4c-.55 0-1 .45-1 1zm-5-3c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3zm3.53 7.94l.71.71c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41l-.71-.71c-.39-.39-1.02-.39-1.41 0-.38.39-.38 1.03 0 1.41zm-9.19.71c.39.39 1.02.39 1.41 0l.71-.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0l-.71.71c-.38.39-.38 1.03 0 1.41zM12 23c.56 0 1-.45 1-1v-4c0-.55-.45-1-1-1s-1 .45-1 1v4c0 .55.45 1 1 1z');
        $doc->addChild($l0I1);
    }
}
