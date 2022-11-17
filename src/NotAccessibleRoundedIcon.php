<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['accessibility', 'accessible', 'body', 'handicap', 'help', 'human', 'not', 'person', 'wheelchair'],
)]
final class NotAccessibleRoundedIcon extends SVG
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
        $l1I1 = new SVGPath(d: 'M12,2c1.1,0,2,0.9,2,2s-0.9,2-2,2s-2-0.9-2-2S10.9,2,12,2z M10,20c-1.66,0-3-1.34-3-3c0-1.31,0.84-2.41,2-2.83V12.1 c-2.28,0.46-4,2.48-4,4.9c0,2.76,2.24,5,5,5c2.42,0,4.44-1.72,4.9-4h-2.07C12.42,19.16,11.31,20,10,20z M20.49,20.49L3.51,3.51 c-0.39-0.39-1.02-0.39-1.41,0c-0.39,0.39-0.39,1.02,0,1.41l7.9,7.9V15c0,1.1,0.9,2,2,2h2.17l4.9,4.9c0.39,0.39,1.02,0.39,1.41,0 C20.88,21.51,20.88,20.88,20.49,20.49z M18.16,10.93c-1.25-0.21-2.43-0.88-3.23-1.76l-1.29-1.43C13.4,7.5,13.2,7.38,13.01,7.28 c-0.36-0.19-0.72-0.3-1.2-0.26c-0.49,0.04-0.91,0.27-1.23,0.61L14,11.05c1,0.83,2.4,1.54,3.8,1.82C18.42,13,19,12.53,19,11.9 C19,11.42,18.64,11.01,18.16,10.93z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
