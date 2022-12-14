<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['rocket', 'space', 'spaceship'],
)]
final class RocketIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M12,2.5c0,0,4.5,2.04,4.5,10.5c0,2.49-1.04,5.57-1.6,7H9.1c-0.56-1.43-1.6-4.51-1.6-7C7.5,4.54,12,2.5,12,2.5z M14,11 c0-1.1-0.9-2-2-2s-2,0.9-2,2s0.9,2,2,2S14,12.1,14,11z M7.69,20.52c-0.48-1.23-1.52-4.17-1.67-6.87l-1.13,0.75 C4.33,14.78,4,15.4,4,16.07V22L7.69,20.52z M20,22v-5.93c0-0.67-0.33-1.29-0.89-1.66l-1.13-0.75c-0.15,2.69-1.2,5.64-1.67,6.87 L20,22z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
