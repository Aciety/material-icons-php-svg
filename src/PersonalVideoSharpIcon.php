<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['notification'],
    tags: ['Android', 'OS', 'cam', 'chrome', 'desktop', 'device', 'hardware', 'iOS', 'mac', 'monitor', 'personal', 'television', 'tv', 'video', 'web', 'window'],
)]
final class PersonalVideoSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M23 3H1v16h7v2h8v-2h6.99L23 3zm-2 14H3V5h18v12z');
        $doc->addChild($l0I1);
    }
}
