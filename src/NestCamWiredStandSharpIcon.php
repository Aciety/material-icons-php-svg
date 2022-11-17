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
final class NestCamWiredStandSharpIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M18,0.85L11.98,1.4C8.95,1.7,6.37,4,6.04,7.03c-0.39,3.57,2.2,6.69,5.68,7.04l1.9,0.19l-0.56,0.85 c-0.88-0.19-1.83-0.18-2.85,0.25C8.21,16.21,7,18.25,7,20.41L7,23h10v-3c0-1.67-0.83-3.15-2.09-4.06l0.97-1.45L18,14.72V0.85z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
