<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['home'],
    tags: ['camera', 'film', 'filming', 'hardware', 'image', 'motion', 'nest', 'picture', 'stand', 'video', 'videography', 'wired'],
)]
final class NestCamWiredStandTwoToneIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M12,17c-1.65,0-3,1.35-3,3v1h6v-1C15,18.35,13.65,17,12,17z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M16,3l-4.08,0.41C9.69,3.64,8,5.5,8,7.75s1.69,4.11,3.92,4.34l4.11,0.42L16,3L16,3z');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M16,1c-0.15,0,0.11-0.02-4.28,0.42C8.47,1.75,6,4.48,6,7.75s2.47,6,5.72,6.33l1.9,0.19l-0.56,0.85 C12.71,15.04,12.36,15,12,15c-2.76,0-5,2.24-5,5v2c0,0.55,0.45,1,1,1h8c0.55,0,1-0.45,1-1v-2c0-1.67-0.83-3.15-2.09-4.06 l0.97-1.45c0.04,0,0.09,0.01,0.13,0.01c1.09,0,2-0.89,2-2V3C18,1.89,17.09,1,16,1z M15,20v1H9v-1c0-1.65,1.35-3,3-3 C13.65,17,15,18.35,15,20z M11.92,12.09C9.69,11.86,8,10,8,7.75s1.69-4.11,3.92-4.34L16,3h0l0.03,9.5L11.92,12.09z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
