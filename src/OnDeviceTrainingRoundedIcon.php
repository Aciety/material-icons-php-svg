<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['arrow', 'bulb', 'call', 'cell', 'contact', 'device', 'hardware', 'idea', 'inprogress', 'light', 'load', 'loading', 'mobile', 'model', 'phone', 'refresh', 'renew', 'restore', 'reverse', 'rotate', 'telephone', 'training'],
)]
final class OnDeviceTrainingRoundedIcon extends SVG
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
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M11.5,17h1c0.28,0,0.5-0.22,0.5-0.5l0,0c0-0.28-0.22-0.5-0.5-0.5h-1c-0.28,0-0.5,0.22-0.5,0.5l0,0 C11,16.78,11.22,17,11.5,17z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M11.52,11.06c-0.71,0.16-1.29,0.74-1.46,1.44c-0.23,0.94,0.21,1.8,0.94,2.22v0.53c0,0.14,0.11,0.25,0.25,0.25h1.5 c0.14,0,0.25-0.11,0.25-0.25v-0.53c0.6-0.35,1-0.98,1-1.72C14,11.74,12.83,10.75,11.52,11.06z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M18,1.01L6,1C4.9,1,4,1.9,4,3v18c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V3C20,1.9,19.1,1.01,18,1.01z M18,18H6V6h12V18z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M15.33,15.27c0.36,0.36,0.99,0.26,1.21-0.2C16.83,14.44,17,13.74,17,13s-0.17-1.44-0.46-2.07 c-0.22-0.47-0.84-0.57-1.21-0.2l0,0c-0.22,0.22-0.28,0.56-0.15,0.84c0.2,0.44,0.31,0.92,0.31,1.43s-0.11,0.99-0.31,1.43 C15.06,14.72,15.11,15.05,15.33,15.27L15.33,15.27z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M8.67,15.27c0.22-0.22,0.28-0.56,0.15-0.84C8.61,13.99,8.5,13.51,8.5,13c0-1.93,1.57-3.5,3.5-3.5v0.69 c0,0.22,0.25,0.33,0.42,0.19l1.62-1.44c0.11-0.1,0.11-0.27,0-0.37l-1.62-1.44C12.25,6.98,12,7.09,12,7.31V8c-2.76,0-5,2.24-5,5 c0,0.74,0.17,1.44,0.46,2.07C7.68,15.54,8.3,15.64,8.67,15.27L8.67,15.27z');
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
