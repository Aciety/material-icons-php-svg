<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['hardware'],
    tags: ['OS', 'android', 'cell', 'device', 'hardware', 'iOS', 'mobile', 'phone', 'tablet'],
)]
final class PhoneAndroidSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M19 1H5v22h14V1zm-5 20h-4v-1h4v1zm3-3H7V4h10v14z');
        $doc->addChild($l0I1);
    }
}
