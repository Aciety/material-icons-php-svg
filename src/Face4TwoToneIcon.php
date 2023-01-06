<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['social'],
    tags: ['account', 'emoji', 'eyes', 'face', 'human', 'lock', 'log', 'login', 'logout', 'people', 'person', 'profile', 'recognition', 'security', 'social', 'thumbnail', 'unlock', 'user'],
)]
final class Face4TwoToneIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M4.42,9.47L4.42,9.47C6.13,8.5,7.45,6.92,8.08,5.03C6.37,6,5.05,7.58,4.42,9.47z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M17.5,8c0.46,0,0.91-0.05,1.34-0.12C17.44,5.56,14.9,4,12,4c-0.46,0-0.91,0.05-1.34,0.12h0 C12.06,6.44,14.6,8,17.5,8z');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M7.35,3.15C6.8,2.46,5.95,2,5,2C3.35,2,2,3.35,2,5c0,0.95,0.46,1.8,1.15,2.35 C4.09,5.56,5.56,4.09,7.35,3.15z');
        $l2I2->setStyle('opacity', '.3');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M12,2c-0.96,0-1.88,0.14-2.75,0.39C8.37,0.96,6.8,0,5,0C2.24,0,0,2.24,0,5c0,1.8,0.96,3.37,2.39,4.25 C2.14,10.12,2,11.04,2,12c0,5.52,4.48,10,10,10s10-4.48,10-10S17.52,2,12,2z M12,4c2.9,0,5.44,1.56,6.84,3.88 C18.41,7.95,17.96,8,17.5,8c-2.9,0-5.44-1.56-6.84-3.88h0C11.09,4.05,11.54,4,12,4z M2,5c0-1.65,1.35-3,3-3 c0.95,0,1.8,0.46,2.35,1.15C5.56,4.09,4.09,5.56,3.15,7.35C2.46,6.8,2,5.95,2,5z M8.08,5.03C7.45,6.92,6.13,8.5,4.42,9.47h0 C5.05,7.58,6.37,6,8.08,5.03z M12,20c-4.41,0-8-3.59-8-8c0-0.05,0.01-0.1,0.01-0.15c2.6-0.98,4.68-2.99,5.74-5.55 C11.58,8.56,14.37,10,17.5,10c0.75,0,1.47-0.09,2.17-0.24C19.88,10.47,20,11.22,20,12C20,16.41,16.41,20,12,20z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGCircle(cx: '9', cy: '13', r: '1.25');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGCircle(cx: '15', cy: '13', r: '1.25');
        $l1I0->addChild($l2I5);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
