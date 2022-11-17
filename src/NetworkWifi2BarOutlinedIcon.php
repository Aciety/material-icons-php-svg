<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: [],
)]
final class NetworkWifi2BarOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M12,4C7.31,4,3.07,5.9,0,8.98L12,21L24,8.98C20.93,5.9,16.69,4,12,4z M16.78,13.38C15.4,12.5,13.76,12,12,12 c-1.76,0-3.4,0.5-4.78,1.38l-4.3-4.3C5.51,7.08,8.67,6,12,6s6.49,1.08,9.08,3.07L16.78,13.38z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
