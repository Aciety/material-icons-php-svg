<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['places'],
    tags: ['architecture', 'beach', 'camping', 'cottage', 'estate', 'holiday', 'home', 'house', 'lake', 'lodge', 'maps', 'place', 'real', 'residence', 'residential', 'stay', 'traveling', 'vacation', 'village'],
)]
final class HolidayVillageTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M8,6.83l-4,4V18h3v-3h2v3h3v-7.17L8,6.83z M9,13H7v-2h2V13z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M8,4l-6,6v10h12V10L8,4z M12,18H9v-3H7v3H4v-7.17l4-4l4,4V18z M9,13H7v-2h2V13z M18,20V8.35L13.65,4h-2.83L16,9.18V20H18z M22,20V6.69L19.31,4h-2.83L20,7.52V20H22z');
        $doc->addChild($l0I2);
    }
}
