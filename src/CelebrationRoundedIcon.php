<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['activity', 'birthday', 'celebration', 'event', 'fun', 'party'],
)]
final class CelebrationRoundedIcon extends SvgIcon
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
        $l3I0 = new SVGPath(d: 'M3.99,21.29l9.04-3.23c1.38-0.49,1.78-2.26,0.74-3.3l-4.53-4.53c-1.04-1.04-2.8-0.64-3.3,0.74l-3.23,9.04 C2.43,20.81,3.19,21.57,3.99,21.29z');
        $l2I0->addChild($l3I0);
        $l3I1 = new SVGPath(d: 'M15.06,12l5.06-5.06c0.49-0.49,1.28-0.49,1.77,0L21.95,7c0.29,0.29,0.77,0.29,1.06,0l0,0c0.29-0.29,0.29-0.77,0-1.06 l-0.06-0.06c-1.07-1.07-2.82-1.07-3.89,0L14,10.94c-0.29,0.29-0.29,0.77,0,1.06l0,0C14.29,12.29,14.77,12.29,15.06,12z');
        $l2I0->addChild($l3I1);
        $l3I2 = new SVGPath(d: 'M10.06,6.88L10,6.94C9.71,7.23,9.71,7.71,10,8l0,0c0.29,0.29,0.77,0.29,1.06,0l0.06-0.06c1.07-1.07,1.07-2.82,0-3.89 L11.07,4C10.77,3.7,10.29,3.7,10,4l0,0c-0.29,0.29-0.29,0.77,0,1.06l0.06,0.06C10.54,5.6,10.54,6.4,10.06,6.88z');
        $l2I0->addChild($l3I2);
        $l3I3 = new SVGPath(d: 'M17.06,11.88L16,12.94c-0.29,0.29-0.29,0.77,0,1.06l0,0c0.29,0.29,0.77,0.29,1.06,0l1.06-1.06 c0.49-0.49,1.28-0.49,1.77,0l1.08,1.08c0.29,0.29,0.77,0.29,1.06,0l0,0c0.29-0.29,0.29-0.77,0-1.06l-1.08-1.08 C19.87,10.81,18.13,10.81,17.06,11.88z');
        $l2I0->addChild($l3I3);
        $l3I4 = new SVGPath(d: 'M15.06,5.88L12,8.94c-0.29,0.29-0.29,0.77,0,1.06l0,0c0.29,0.29,0.77,0.29,1.06,0l3.06-3.06c1.07-1.07,1.07-2.82,0-3.89 l-1.06-1.06c-0.29-0.29-0.77-0.29-1.06,0l0,0c-0.29,0.29-0.29,0.77,0,1.06l1.06,1.06C15.54,4.6,15.54,5.4,15.06,5.88z');
        $l2I0->addChild($l3I4);
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
