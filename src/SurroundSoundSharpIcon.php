<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['av'],
    tags: ['circle', 'signal', 'sound', 'speaker', 'surround', 'system', 'volumn', 'wireless'],
)]
final class SurroundSoundSharpIcon extends SvgIcon
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
        $l1I2 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I2->setStyle('fill', 'none');
        $l0I0->addChild($l1I2);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M22,4H2v16h20V4z M7.76,16.24l-1.41,1.41C4.78,16.1,4,14.05,4,12s0.78-4.1,2.34-5.66l1.41,1.41C6.59,8.93,6,10.46,6,12 S6.59,15.07,7.76,16.24z M12,16c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S14.21,16,12,16z M17.66,17.66l-1.41-1.41 C17.41,15.07,18,13.54,18,12s-0.59-3.07-1.76-4.24l1.41-1.41C19.22,7.9,20,9.95,20,12S19.22,16.1,17.66,17.66z M12,10 c-1.1,0-2,0.9-2,2s0.9,2,2,2s2-0.9,2-2S13.1,10,12,10z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
