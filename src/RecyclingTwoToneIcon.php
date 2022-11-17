<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['bio', 'eco', 'green', 'loop', 'recyclable', 'recycle', 'recycling', 'rotate', 'sustainability', 'sustainable', 'trash'],
)]
final class RecyclingTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M5.77 7.15 7.2 4.78l1.03-1.71c.39-.65 1.33-.65 1.72 0l1.48 2.46-1.23 2.06-1 1.62-3.43-2.06zm15.95 5.82-1.6-2.66-3.46 2L18.87 16H20c.76 0 1.45-.43 1.79-1.11.14-.28.21-.58.21-.89 0-.36-.1-.71-.28-1.03zM16 21h1.5c.76 0 1.45-.43 1.79-1.11L20.74 17H16v-2l-4 4 4 4v-2zm-6-4H5.7l-.84 1.41c-.3.5-.32 1.12-.06 1.65.28.57.87.94 1.52.94H10v-4zm-3.88-2.65 1.73 1.04L6.48 9.9 1 11.27l1.7 1.02-.41.69c-.35.59-.38 1.31-.07 1.92l1.63 3.26 2.27-3.81zm10.9-9.21-1.3-2.17C15.35 2.37 14.7 2 14 2h-3.53l3.12 5.2-1.72 1.03 5.49 1.37 1.37-5.49-1.71 1.03z');
        $doc->addChild($l0I1);
    }
}
