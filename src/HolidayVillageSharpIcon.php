<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['places'],
    tags: ['architecture', 'beach', 'camping', 'cottage', 'estate', 'holiday', 'home', 'house', 'lake', 'lodge', 'maps', 'place', 'real', 'residence', 'residential', 'stay', 'traveling', 'vacation', 'village'],
)]
final class HolidayVillageSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M18,20V8.35L13.65,4h-2.83L16,9.18V20H18z M22,20V6.69L19.31,4h-2.83L20,7.52V20H22z M8,4l-6,6v10h5v-5h2v5h5V10L8,4z M9,13 H7v-2h2V13z');
        $doc->addChild($l0I1);
    }
}
