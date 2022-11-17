<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['call', 'calling', 'cell', 'connect', 'connection', 'connectivity', 'contact', 'device', 'hardware', 'mobile', 'phone', 'signal', 'telephone', 'wifi', 'wireless'],
)]
final class WifiCallingIcon extends SVG
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M22,4.95C21.79,4.78,19.67,3,16.5,3c-3.18,0-5.29,1.78-5.5,1.95L16.5,12L22,4.95z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M20,15.51c-1.24,0-2.45-0.2-3.57-0.57c-0.35-0.12-0.75-0.03-1.02,0.24l-2.2,2.2c-2.83-1.45-5.15-3.76-6.59-6.59l2.2-2.2 C9.1,8.31,9.18,7.92,9.07,7.57C8.7,6.45,8.5,5.25,8.5,4c0-0.55-0.45-1-1-1H4C3.45,3,3,3.45,3,4c0,9.39,7.61,17,17,17 c0.55,0,1-0.45,1-1v-3.49C21,15.96,20.55,15.51,20,15.51z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
