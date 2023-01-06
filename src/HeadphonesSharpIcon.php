<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['hardware'],
    tags: ['accessory', 'audio', 'device', 'ear', 'earphone', 'headphones', 'headset', 'listen', 'music', 'sound'],
)]
final class HeadphonesSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M12,3c-4.97,0-9,4.03-9,9v9h6v-8H5v-1c0-3.87,3.13-7,7-7s7,3.13,7,7v1h-4v8h6v-9C21,7.03,16.97,3,12,3z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
