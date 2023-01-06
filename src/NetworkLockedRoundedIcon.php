<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['notification'],
    tags: ['alert', 'available', 'cellular', 'connection', 'data', 'error', 'internet', 'lock', 'locked', 'mobile', 'network', 'not', 'privacy', 'private', 'protection', 'restricted', 'safety', 'secure', 'security', 'service', 'signal', 'warning', 'wifi', 'wireless'],
)]
final class NetworkLockedRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M22,12l0-7.58c0-0.89-1.08-1.34-1.71-0.71L3.71,20.29C3.08,20.92,3.52,22,4.41,22H15v-6c0-2.21,1.79-4,4-4H22z M22,17v-1 c0-1.1-0.9-2-2-2c-1.1,0-2,0.9-2,2v1c-0.55,0-1,0.45-1,1v3c0,0.55,0.45,1,1,1h4c0.55,0,1-0.45,1-1v-3C23,17.45,22.55,17,22,17z M19,16c0-0.55,0.45-1,1-1s1,0.45,1,1v1h-2V16z');
        $doc->addChild($l0I1);
    }
}
