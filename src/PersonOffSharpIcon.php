<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['account', 'avatar', 'disabled', 'enabled', 'face', 'human', 'off', 'on', 'people', 'person', 'profile', 'slash', 'user'],
)]
final class PersonOffSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M8.65,5.82C9.36,4.72,10.6,4,12,4c2.21,0,4,1.79,4,4c0,1.4-0.72,2.64-1.82,3.35L8.65,5.82z M20,17.17 c-0.02-1.1-0.63-2.11-1.61-2.62c-0.54-0.28-1.13-0.54-1.77-0.76L20,17.17z M21.19,21.19L2.81,2.81L1.39,4.22l8.89,8.89 c-1.81,0.23-3.39,0.79-4.67,1.45C4.61,15.07,4,16.1,4,17.22V20h13.17l2.61,2.61L21.19,21.19z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
