<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['activism', 'donation', 'fingers', 'gesture', 'giving', 'hand', 'hands', 'heart', 'love', 'sharing', 'volunteer'],
)]
final class VolunteerActivismIcon extends SVG
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
        $l2I0 = new SVGRect(x: '1', y: '11', width: '4', height: '11');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M16,3.25C16.65,2.49,17.66,2,18.7,2C20.55,2,22,3.45,22,5.3c0,2.27-2.91,4.9-6,7.7c-3.09-2.81-6-5.44-6-7.7 C10,3.45,11.45,2,13.3,2C14.34,2,15.35,2.49,16,3.25z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M20,17h-7l-2.09-0.73l0.33-0.94L13,16h2.82c0.65,0,1.18-0.53,1.18-1.18v0c0-0.49-0.31-0.93-0.77-1.11L8.97,11H7v9.02 L14,22l8.01-3v0C22,17.9,21.11,17,20,17z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
