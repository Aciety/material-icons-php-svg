<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['notification'],
    tags: ['!', 'alert', 'attention', 'camera', 'card', 'caution', 'danger', 'digital', 'error', 'exclamation', 'important', 'mark', 'memory', 'notification', 'photos', 'sd', 'secure', 'storage', 'symbol', 'warning'],
)]
final class SimCardAlertIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M18 2h-8L4.02 8 4 20c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-5 15h-2v-2h2v2zm0-4h-2V8h2v5z');
        $doc->addChild($l0I1);
    }
}
