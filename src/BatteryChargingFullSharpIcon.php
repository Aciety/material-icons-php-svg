<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['battery', 'bolt', 'cell', 'charge', 'charging', 'full', 'lightening', 'mobile', 'power', 'thunderbolt'],
)]
final class BatteryChargingFullSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M17 4h-3V2h-4v2H7v18h10V4zm-6 16v-5.5H9L13 7v5.5h2L11 20z');
        $doc->addChild($l0I1);
    }
}
