<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['hardware'],
    tags: ['Android', 'OS', 'airplay', 'cast', 'chrome', 'connect', 'desktop', 'device', 'display', 'hardware', 'iOS', 'mac', 'monitor', 'screen', 'screencast', 'streaming', 'television', 'tv', 'web', 'window', 'wireless'],
)]
final class CastIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I1->setStyle('fill', 'none');
        $l0I1->setStyle('opacity', '.1');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M21 3H3c-1.1 0-2 .9-2 2v3h2V5h18v14h-7v2h7c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM1 18v3h3c0-1.66-1.34-3-3-3zm0-4v2c2.76 0 5 2.24 5 5h2c0-3.87-3.13-7-7-7zm0-4v2c4.97 0 9 4.03 9 9h2c0-6.08-4.93-11-11-11z');
        $doc->addChild($l0I2);
    }
}
