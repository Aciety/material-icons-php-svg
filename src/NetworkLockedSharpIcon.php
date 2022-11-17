<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['notification'],
    tags: ['alert', 'available', 'cellular', 'connection', 'data', 'error', 'internet', 'lock', 'locked', 'mobile', 'network', 'not', 'privacy', 'private', 'protection', 'restricted', 'safety', 'secure', 'security', 'service', 'signal', 'warning', 'wifi', 'wireless'],
)]
final class NetworkLockedSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0zm0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M22 16v-.36c0-1.31-.94-2.5-2.24-2.63-1.5-.15-2.76 1.02-2.76 2.49v.5h-1v6h7v-6h-1zm-1 0h-3v-.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5v.5zm-1.5-5c.15 0 .3.01.46.02.01 0 .03.01.04.01V1L1 20h13v-6h1.26c.22-.63.58-1.2 1.06-1.68.85-.85 1.98-1.32 3.18-1.32z');
        $doc->addChild($l0I1);
    }
}
