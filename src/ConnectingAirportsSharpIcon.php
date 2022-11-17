<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['airplane', 'airplanes', 'airport', 'airports', 'connecting', 'flight', 'plane', 'transportation', 'travel', 'trip'],
)]
final class ConnectingAirportsSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M15.4,17l1.3,4.4h-1.1L13,17h-3c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1h3l2.6-4.4h1.1L15.4,15h2.85L19,14h1l-0.6,2l0.6,2h-1 l-0.75-1H15.4z M5.75,7L5,6H4l0.6,2L4,10h1l0.75-1H8.6l-1.3,4.4h1.1L11,9h3c0.55,0,1-0.45,1-1s-0.45-1-1-1h-3L8.4,2.6H7.3L8.6,7 H5.75z');
        $doc->addChild($l0I1);
    }
}
