<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['forecast', 'hurricane', 'storm', 'temperature', 'twister', 'weather', 'wind'],
)]
final class StormSharpIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M18.93,8C16.72,4.18,11.82,2.87,8,5.07c-1.41,0.82-2.48,2-3.16,3.37C4.71,6.24,5.06,4.04,5.86,2H3.74 C2.2,6.49,2.52,11.58,5.07,16c1.1,1.91,2.88,3.19,4.86,3.72c1.98,0.53,4.16,0.31,6.07-0.79c1.41-0.82,2.48-2,3.16-3.37 c0.13,2.2-0.21,4.4-1.01,6.44h2.11C21.79,17.51,21.48,12.42,18.93,8z M15,17.2c-2.87,1.65-6.54,0.67-8.2-2.2 c-0.11-0.2-0.21-0.4-0.3-0.6C5.3,11.64,6.33,8.34,9,6.8c2.86-1.65,6.54-0.67,8.2,2.2c0.11,0.2,0.21,0.4,0.3,0.6 C18.7,12.36,17.67,15.66,15,17.2z M12,10c1.1,0,2,0.9,2,2s-0.9,2-2,2s-2-0.9-2-2S10.9,10,12,10 M12,8c-2.21,0-4,1.79-4,4 s1.79,4,4,4s4-1.79,4-4S14.21,8,12,8z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
