<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['crisis', 'disaster', 'natural', 'rain', 'storm', 'weather'],
)]
final class LandslideOutlinedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M11,12L8,8H2v14h20l-6-8L11,12z M12.53,14.77L6,16.95l-2-0.67v-1.89l2,0.67l3.95-1.32L12.53,14.77z M7,10l1.57,2.09 L6,12.95l-2-0.67V10H7z M4,20v-1.61l2,0.67l9.03-3.01L18,20H4z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M17,6V1l-5-1L9,2v4l3,2L17,6z M11,3.07l1.42-0.95L15,2.64v2.01l-2.77,1.11L11,4.93V3.07z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M18.5,7L16,9v3l2.5,2l4.5-2V8L18.5,7z M21,10.7l-2.2,0.98L18,11.04V9.96l1-0.8l2,0.44V10.7z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
