<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['delivery', 'dining', 'food', 'meal', 'restaurant', 'scooter', 'takeout', 'transportation', 'vehicle', 'vespa'],
)]
final class DeliveryDiningRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: '0', width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M19,7c0-1.1-0.9-2-2-2h-2c-0.55,0-1,0.45-1,1v0c0,0.55,0.45,1,1,1h2v2.65L13.52,14H10v-4c0-0.55-0.45-1-1-1H6 c-2.21,0-4,1.79-4,4v2c0,0.55,0.45,1,1,1h1c0,1.66,1.34,3,3,3s3-1.34,3-3h3.52c0.61,0,1.18-0.28,1.56-0.75l3.48-4.35 C18.85,10.54,19,10.1,19,9.65V7z M7,17c-0.55,0-1-0.45-1-1h2C8,16.55,7.55,17,7,17z');
        $l2I0->addChild($l3I0);
        $l3I1 = new SVGPath(d: 'M6,6h3c0.55,0,1,0.45,1,1v0c0,0.55-0.45,1-1,1H6C5.45,8,5,7.55,5,7v0C5,6.45,5.45,6,6,6z');
        $l2I0->addChild($l3I1);
        $l3I2 = new SVGPath(d: 'M19,13c-1.66,0-3,1.34-3,3s1.34,3,3,3s3-1.34,3-3S20.66,13,19,13z M19,17c-0.55,0-1-0.45-1-1s0.45-1,1-1s1,0.45,1,1 C20,16.55,19.55,17,19,17z');
        $l2I0->addChild($l3I2);
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
