<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['account', 'avatar', 'badge', 'card', 'certified', 'employee', 'face', 'human', 'identification', 'name', 'people', 'person', 'profile', 'security', 'user', 'work'],
)]
final class BadgeTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: '0', width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M14,13.5h4V12h-4V13.5z M14,16.5h4V15h-4V16.5z M20,7h-5V4c0-1.1-0.9-2-2-2h-2C9.9,2,9,2.9,9,4v3H4C2.9,7,2,7.9,2,9v11 c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V9C22,7.9,21.1,7,20,7z M11,4h2v5h-2V4z M20,20H4V9h5c0,1.1,0.9,2,2,2h2c1.1,0,2-0.9,2-2h5V20 z M9,15c0.83,0,1.5-0.67,1.5-1.5c0-0.83-0.67-1.5-1.5-1.5s-1.5,0.67-1.5,1.5C7.5,14.33,8.17,15,9,15z M11.08,16.18 C10.44,15.9,9.74,15.75,9,15.75s-1.44,0.15-2.08,0.43C6.36,16.42,6,16.96,6,17.57V18h6v-0.43C12,16.96,11.64,16.42,11.08,16.18z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M13,11h-2c-1.1,0-2-0.9-2-2H4v11h16V9h-5C15,10.1,14.1,11,13,11z M9,12c0.83,0,1.5,0.67,1.5,1.5 c0,0.83-0.67,1.5-1.5,1.5s-1.5-0.67-1.5-1.5C7.5,12.67,8.17,12,9,12z M12,18H6v-0.43c0-0.6,0.36-1.15,0.92-1.39 C7.56,15.9,8.26,15.75,9,15.75s1.44,0.15,2.08,0.43c0.55,0.24,0.92,0.78,0.92,1.39V18z M18,16.5h-4V15h4V16.5z M18,13.5h-4V12h4 V13.5z');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
