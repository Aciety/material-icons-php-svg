<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['account', 'camera', 'face', 'front', 'human', 'image', 'people', 'person', 'photo', 'photography', 'picture', 'portrait', 'profile', 'user'],
)]
final class PhotoCameraFrontRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M20,5h-3.17l-1.24-1.35C15.22,3.24,14.68,3,14.12,3H9.88C9.32,3,8.78,3.24,8.41,3.65L7.17,5H4C2.9,5,2,5.9,2,7v12 c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V7C22,5.9,21.1,5,20,5z M12,9c1.1,0,2,0.9,2,2c0,1.1-0.9,2-2,2s-2-0.9-2-2C10,9.9,10.9,9,12,9z M16,17H8v-0.57c0-0.81,0.48-1.53,1.22-1.85C10.07,14.21,11.01,14,12,14s1.93,0.21,2.78,0.58C15.52,14.9,16,15.62,16,16.43V17z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
