<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['image'],
    tags: ['collage', 'disabled', 'enabled', 'grid', 'image', 'layout', 'off', 'on', 'slash', 'view'],
)]
final class GridOffTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20 14v-4h-4v2.89L17.11 14zm-10-1.45V14h1.45zM14 10h-.89l.89.89zm5.11 6l.89.89V16zM8 4h-.89l.89.89zm6 4V4h-4v2.89L11.11 8zm2-4h4v4h-4zm-6 12v4h4v-3.45l-.55-.55zm-6-6v4h4v-3.45L7.45 10zm12 10h1.45L16 18.55zM4 16h4v4H4zm0-9.45V8h1.45z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M8 4v.89l2 2V4h4v4h-2.89l2 2H14v.89l2 2V10h4v4h-2.89l2 2H20v.89l2 2V4c0-1.1-.9-2-2-2H5.11l2 2H8zm8 0h4v4h-4V4zM1.41 1.14L0 2.55l2 2V20c0 1.1.9 2 2 2h15.45l2.01 2.01 1.41-1.41L1.41 1.14zM10 12.55L11.45 14H10v-1.45zm-6-6L5.45 8H4V6.55zM8 20H4v-4h4v4zm0-6H4v-4h3.45l.55.55V14zm6 6h-4v-4h3.45l.55.55V20zm2 0v-1.45L17.45 20H16z');
        $doc->addChild($l0I2);
    }
}
