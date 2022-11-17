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
final class SpatialAudioOffTwoToneIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M15.48,17.34C14.29,16.73,12.37,16,10,16c-2.37,0-4.29,0.73-5.48,1.34C4.2,17.5,4,17.84,4,18.22V19h12 v-0.78C16,17.84,15.8,17.5,15.48,17.34z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '10', cy: '9', r: '2');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M10,13c2.21,0,4-1.79,4-4c0-2.21-1.79-4-4-4S6,6.79,6,9C6,11.21,7.79,13,10,13z M10,7c1.1,0,2,0.9,2,2c0,1.1-0.9,2-2,2 s-2-0.9-2-2C8,7.9,8.9,7,10,7z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M16.39,15.56C14.71,14.7,12.53,14,10,14c-2.53,0-4.71,0.7-6.39,1.56C2.61,16.07,2,17.1,2,18.22V21h16v-2.78 C18,17.1,17.39,16.07,16.39,15.56z M16,19H4v-0.78c0-0.38,0.2-0.72,0.52-0.88C5.71,16.73,7.63,16,10,16 c2.37,0,4.29,0.73,5.48,1.34C15.8,17.5,16,17.84,16,18.22V19z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M20.36,1l-1.41,1.41c2.73,2.73,2.73,7.17,0,9.9l1.41,1.41C23.88,10.21,23.88,4.51,20.36,1z');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M17.54,10.9c1.95-1.95,1.95-5.12,0-7.07l-1.41,1.41c1.17,1.17,1.17,3.07,0,4.24L17.54,10.9z');
        $l1I0->addChild($l2I5);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
