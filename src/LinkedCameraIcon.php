<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['image'],
    tags: ['camera', 'connect', 'connection', 'lens', 'linked', 'network', 'photo', 'photography', 'picture', 'signal', 'signals', 'sync', 'wireless'],
)]
final class LinkedCameraIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGCircle(cx: '12', cy: '14', r: '3.2');
        $doc->addChild($l0I0);
        $l0I1 = new SVGCircle(cx: '12', cy: '14', r: '5');
        $l0I1->setStyle('fill', 'none');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M16 3.33c2.58 0 4.67 2.09 4.67 4.67H22c0-3.31-2.69-6-6-6v1.33M16 6c1.11 0 2 .89 2 2h1.33c0-1.84-1.49-3.33-3.33-3.33V6');
        $doc->addChild($l0I2);
        $l0I3 = new SVGPath(d: 'M24 0H0v24h24V0z');
        $l0I3->setStyle('fill', 'none');
        $doc->addChild($l0I3);
        $l0I4 = new SVGPath(d: 'M17 9c0-1.11-.89-2-2-2V4H9L7.17 6H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V9h-5zm-5 10c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z');
        $doc->addChild($l0I4);
    }
}
