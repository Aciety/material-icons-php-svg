<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['hardware'],
    tags: ['asset', 'console', 'controller', 'device', 'game', 'gamepad', 'gaming', 'playstation', 'video'],
)]
final class VideogameAssetOutlinedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M21 6H3c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 10H3V8h18v8zM6 15h2v-2h2v-2H8V9H6v2H4v2h2z');
        $doc->addChild($l0I1);
        $l0I2 = new SVGCircle(cx: '14.5', cy: '13.5', r: '1.5');
        $doc->addChild($l0I2);
        $l0I3 = new SVGCircle(cx: '18.5', cy: '10.5', r: '1.5');
        $doc->addChild($l0I3);
    }
}
