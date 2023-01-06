<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['hardware'],
    tags: ['accessory', 'audio', 'earbuds', 'earphone', 'headphone', 'listen', 'music', 'sound'],
)]
final class EarbudsOutlinedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M16,3c-2.76,0-5,2.24-5,5v8c0,1.66-1.34,3-3,3s-3-1.34-3-3V9h0.83C7.44,9,8.89,7.82,9,6.21c0.12-1.69-1.16-3.1-2.8-3.21 C4.44,2.89,3,4.42,3,6.19V16c0,2.76,2.24,5,5,5s5-2.24,5-5V8c0-1.66,1.34-3,3-3s3,1.34,3,3v7h-0.83c-1.61,0-3.06,1.18-3.17,2.79 c-0.12,1.69,1.16,3.1,2.8,3.21c1.76,0.12,3.2-1.42,3.2-3.18V8C21,5.24,18.76,3,16,3z M5,6c0-0.55,0.45-1,1-1s1,0.45,1,1S6.55,7,6,7 H5V6z M19,18c0,0.55-0.45,1-1,1s-1-0.45-1-1s0.45-1,1-1h1V18z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
