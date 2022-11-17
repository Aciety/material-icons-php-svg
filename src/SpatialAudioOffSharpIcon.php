<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['[offline]', 'audio', 'disabled', 'enabled', 'music', 'note', 'off', 'on', 'slash', 'sound', 'spatial'],
)]
final class SpatialAudioOffSharpIcon extends SVG
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
        $l2I0 = new SVGCircle(cx: '10', cy: '9', r: '4');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M16.39,15.56C14.71,14.7,12.53,14,10,14c-2.53,0-4.71,0.7-6.39,1.56C2.61,16.07,2,17.1,2,18.22V21h16v-2.78 C18,17.1,17.39,16.07,16.39,15.56z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M20.36,1l-1.41,1.41c2.73,2.73,2.73,7.17,0,9.9l1.41,1.41C23.88,10.21,23.88,4.51,20.36,1z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M17.54,10.9c1.95-1.95,1.95-5.12,0-7.07l-1.41,1.41c1.17,1.17,1.17,3.07,0,4.24L17.54,10.9z');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
