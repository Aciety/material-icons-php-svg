<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['image'],
    tags: ['animation', 'circles', 'film', 'motion', 'movement', 'sequence', 'video'],
)]
final class AnimationTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: '0', y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M5,12c-0.63,0.84-1,1.88-1,3c0,2.76,2.24,5,5,5c1.12,0,2.16-0.37,3-1C8.13,19,5,15.87,5,12z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M15,4c-1.13,0-2.16,0.37-3,1c3.87,0.01,7,3.14,7,7c0.63-0.84,1-1.88,1-3C20,6.24,17.76,4,15,4z');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M12,7c-0.6,0-1.17,0.11-1.7,0.3C10.11,7.83,10,8.4,10,9c0,2.76,2.24,5,5,5c0.6,0,1.17-0.11,1.7-0.3 c0.19-0.53,0.3-1.1,0.3-1.7C17,9.24,14.76,7,12,7z');
        $l2I2->setStyle('opacity', '.3');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M8,9c-0.63,0.84-1,1.88-1,3c0,2.76,2.24,5,5,5c1.12,0,2.16-0.37,3-1C11.13,15.99,8,12.86,8,9z');
        $l2I3->setStyle('opacity', '.3');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M15,2c-2.71,0-5.05,1.54-6.22,3.78c-1.28,0.67-2.34,1.72-3,3C3.54,9.95,2,12.29,2,15c0,3.87,3.13,7,7,7 c2.71,0,5.05-1.54,6.22-3.78c1.28-0.67,2.34-1.72,3-3C20.46,14.05,22,11.71,22,9C22,5.13,18.87,2,15,2z M9,20c-2.76,0-5-2.24-5-5 c0-1.12,0.37-2.16,1-3c0,3.87,3.13,7,7,7C11.16,19.63,10.12,20,9,20z M12,17c-2.76,0-5-2.24-5-5c0-1.12,0.37-2.16,1-3 c0,3.86,3.13,6.99,7,7C14.16,16.63,13.12,17,12,17z M16.7,13.7C16.17,13.89,15.6,14,15,14c-2.76,0-5-2.24-5-5 c0-0.6,0.11-1.17,0.3-1.7C10.83,7.11,11.4,7,12,7c2.76,0,5,2.24,5,5C17,12.6,16.89,13.17,16.7,13.7z M19,12c0-3.86-3.13-6.99-7-7 c0.84-0.63,1.87-1,3-1c2.76,0,5,2.24,5,5C20,10.12,19.63,11.16,19,12z');
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
