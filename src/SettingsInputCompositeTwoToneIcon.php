<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['action'],
    tags: ['component', 'composite', 'connection', 'connectivity', 'input', 'plug', 'points', 'settings'],
)]
final class SettingsInputCompositeTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M3 16c0 .55.45 1 1 1s1-.45 1-1v-2H3v2zm8 0c0 .55.45 1 1 1s1-.45 1-1v-2h-2v2zm8 0c0 .55.45 1 1 1s1-.45 1-1v-2h-2v2z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M5 2c0-.55-.45-1-1-1s-1 .45-1 1v4H1v10c0 1.3.84 2.4 2 2.82V23h2v-4.18C6.16 18.4 7 17.3 7 16V6H5V2zm0 14c0 .55-.45 1-1 1s-1-.45-1-1v-2h2v2zm0-4H3V8h2v4zm8-10c0-.55-.45-1-1-1s-1 .45-1 1v4H9v10c0 1.3.84 2.4 2 2.82V23h2v-4.18c1.16-.42 2-1.52 2-2.82V6h-2V2zm0 14c0 .55-.45 1-1 1s-1-.45-1-1v-2h2v2zm0-4h-2V8h2v4zm8-6V2c0-.55-.45-1-1-1s-1 .45-1 1v4h-2v10c0 1.3.84 2.4 2 2.82V23h2v-4.18c1.16-.42 2-1.52 2-2.82V6h-2zm0 10c0 .55-.45 1-1 1s-1-.45-1-1v-2h2v2zm0-4h-2V8h2v4z');
        $doc->addChild($l0I2);
    }
}
