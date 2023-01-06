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
final class SpatialAudioRoundedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M22.11,7.95c-1.89-0.23-5.57-1.83-6.09-6.09C15.96,1.36,15.54,1,15.04,1h0c-0.6,0-1.07,0.53-1,1.13 c0.31,2.43,2.38,7.12,7.8,7.8c0.6,0.08,1.13-0.4,1.13-1v0C22.97,8.43,22.6,8.01,22.11,7.95z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M21.71,5.83c0.64,0.17,1.26-0.31,1.26-0.97c0-0.47-0.34-0.85-0.79-0.97c-0.49-0.14-1.72-0.68-2.11-2.13 C19.95,1.32,19.57,1,19.11,1H19.1c-0.66,0-1.14,0.64-0.96,1.28C18.74,4.5,20.58,5.53,21.71,5.83z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGCircle(cx: '10', cy: '9', r: '4');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M16.39,15.56C14.71,14.7,12.53,14,10,14c-2.53,0-4.71,0.7-6.39,1.56C2.61,16.07,2,17.1,2,18.22V21h16v-2.78 C18,17.1,17.39,16.07,16.39,15.56z');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
