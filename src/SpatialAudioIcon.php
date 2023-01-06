<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['audio', 'music', 'note', 'sound', 'spatial'],
)]
final class SpatialAudioIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGCircle(cx: '10', cy: '9', r: '4');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M16.39,15.56C14.71,14.7,12.53,14,10,14c-2.53,0-4.71,0.7-6.39,1.56C2.61,16.07,2,17.1,2,18.22V21h16v-2.78 C18,17.1,17.39,16.07,16.39,15.56z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M16,1h-2c0,4.97,4.03,9,9,9V8C19.14,8,16,4.86,16,1z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M20,1h-2c0,2.76,2.24,5,5,5V4C21.35,4,20,2.65,20,1z');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
