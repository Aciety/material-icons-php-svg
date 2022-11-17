<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['adjust', 'adjustments', 'area', 'crop', 'edit', 'editing', 'frame', 'image', 'images', 'landscape', 'photo', 'photos', 'settings', 'size'],
)]
final class CropLandscapeRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M19 5H5c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm-1 12H6c-.55 0-1-.45-1-1V8c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v8c0 .55-.45 1-1 1z');
        $doc->addChild($l0I1);
    }
}
