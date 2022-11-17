<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['accounts', 'change', 'details service-human', 'face', 'gear', 'manage', 'options', 'people', 'person', 'profile', 'settings', 'user'],
)]
final class ManageAccountsTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGCircle(cx: '10', cy: '8', r: '2');
        $l3I0->setStyle('enable-background', 'new');
        $l3I0->setStyle('opacity', '.3');
        $l2I0->addChild($l3I0);
        $l3I1 = new SVGPath(d: 'M10,16c0-0.34,0.03-0.67,0.08-0.99C10.05,15,10.03,15,10,15 c-1.97,0-3.9,0.53-5.59,1.54C4.16,16.68,4,17,4,17.35V18h6.29C10.1,17.37,10,16.7,10,16z');
        $l3I1->setStyle('enable-background', 'new');
        $l3I1->setStyle('opacity', '.3');
        $l2I0->addChild($l3I1);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M4,18v-0.65c0-0.34,0.16-0.66,0.41-0.81C6.1,15.53,8.03,15,10,15c0.03,0,0.05,0,0.08,0.01c0.1-0.7,0.3-1.37,0.59-1.98 C10.45,13.01,10.23,13,10,13c-2.42,0-4.68,0.67-6.61,1.82C2.51,15.34,2,16.32,2,17.35V20h9.26c-0.42-0.6-0.75-1.28-0.97-2H4z M10,12c2.21,0,4-1.79,4-4s-1.79-4-4-4S6,5.79,6,8S7.79,12,10,12z M10,6c1.1,0,2,0.9,2,2s-0.9,2-2,2S8,9.1,8,8S8.9,6,10,6z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M20.83,12.63l-1.45,0.49c-0.32-0.27-0.68-0.48-1.08-0.63L18,11h-2l-0.3,1.49c-0.4,0.15-0.76,0.36-1.08,0.63l-1.45-0.49 l-1,1.73l1.14,1c-0.03,0.21-0.06,0.41-0.06,0.63s0.03,0.42,0.06,0.63l-1.14,1l1,1.73l1.45-0.49c0.32,0.27,0.68,0.48,1.08,0.63 L16,21h2l0.3-1.49c0.4-0.15,0.76-0.36,1.08-0.63l1.45,0.49l1-1.73l-1.14-1c0.03-0.21,0.06-0.41,0.06-0.63s-0.03-0.42-0.06-0.63 l1.14-1L20.83,12.63z M17,18c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2s2,0.9,2,2C19,17.1,18.1,18,17,18z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
