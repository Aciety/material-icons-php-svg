<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['call', 'calling', 'cell', 'connect', 'connection', 'connectivity', 'contact', 'device', 'hardware', 'mobile', 'phone', 'signal', 'telephone', 'wifi', 'wireless'],
)]
final class WifiCallingRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M22,4.95C21.79,4.78,19.67,3,16.5,3c-3.18,0-5.29,1.78-5.5,1.95L16.5,12L22,4.95z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M19.2,15.28l-2.54-0.29c-0.61-0.07-1.21,0.14-1.64,0.57l-1.84,1.84c-2.83-1.44-5.15-3.75-6.59-6.59l1.85-1.85 c0.43-0.43,0.64-1.04,0.57-1.64L8.72,4.8C8.6,3.79,7.75,3.03,6.73,3.03H5c-1.13,0-2.07,0.94-2,2.07 C3.53,13.64,10.36,20.47,18.9,21c1.13,0.07,2.07-0.87,2.07-2v-1.73C20.97,16.25,20.21,15.4,19.2,15.28z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
