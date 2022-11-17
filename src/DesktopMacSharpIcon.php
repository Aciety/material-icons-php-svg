<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['hardware'],
    tags: ['Android', 'OS', 'chrome', 'desktop', 'device', 'display', 'hardware', 'iOS', 'mac', 'monitor', 'screen', 'web', 'window'],
)]
final class DesktopMacSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M23 2H1v16h9l-2 3v1h8v-1l-2-3h9V2zm-2 12H3V4h18v10z');
        $doc->addChild($l0I1);
    }
}
