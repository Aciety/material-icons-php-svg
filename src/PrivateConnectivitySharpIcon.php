<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['connectivity', 'lock', 'locked', 'password', 'privacy', 'private', 'protection', 'safety', 'secure', 'security'],
)]
final class PrivateConnectivitySharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M18.93,11c-0.49-3.39-3.4-6-6.93-6s-6.44,2.61-6.93,6H2v2h3.07c0.49,3.39,3.4,6,6.93,6s6.44-2.61,6.93-6H22v-2H18.93z M15,10.5v5H9v-5h1v-1c0-1.21,1.08-2.18,2.34-1.97C13.32,7.69,14,8.61,14,9.61l0,0.89H15z M12.75,13c0,0.41-0.34,0.75-0.75,0.75 s-0.75-0.34-0.75-0.75c0-0.41,0.34-0.75,0.75-0.75S12.75,12.59,12.75,13z M13,9.5v1h-2v-1c0-0.55,0.45-1,1-1S13,8.95,13,9.5z');
        $doc->addChild($l0I1);
    }
}
