<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['[offline]', 'camera', 'disabled', 'enabled', 'flower', 'garden', 'image', 'macro', 'off', 'on', 'slash'],
)]
final class MacroOffRoundedIcon extends SVG
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
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M4.2,13.08c-0.64-0.09-1.21,0.48-1.12,1.12C3.67,18.6,7.44,22,12,22C12,17.44,8.6,13.67,4.2,13.08z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M12,5.5c1.38,0,2.5,1.12,2.5,2.5c0,0.99-0.58,1.84-1.42,2.25l2.48,2.48c0.11,0.02,0.23,0.03,0.35,0.03 c1.38,0,2.5-1.12,2.5-2.5c0-1-0.59-1.85-1.43-2.25c0.84-0.4,1.43-1.25,1.43-2.25c0-1.38-1.12-2.5-2.5-2.5 c-0.53,0-1.01,0.16-1.42,0.44L14.5,3.5C14.5,2.12,13.38,1,12,1S9.5,2.12,9.5,3.5l0.02,0.19C9.12,3.41,8.63,3.25,8.1,3.25 c-0.57,0-1.09,0.2-1.51,0.52l3.16,3.16C10.16,6.08,11.01,5.5,12,5.5z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M19.98,17.15c0.47-0.91,0.8-1.9,0.94-2.95c0.09-0.64-0.48-1.21-1.12-1.12c-1.05,0.14-2.05,0.47-2.95,0.94L19.98,17.15z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M2.1,3.51L2.1,3.51c-0.39,0.39-0.39,1.02,0,1.41l3.93,3.93c-0.35,0.52-0.53,1.17-0.38,1.89c0.22,1.13,1.26,1.98,2.41,2 c0.54,0.01,1.02-0.15,1.44-0.43l0.02,0.02L9.5,12.5c0,1.38,1.12,2.5,2.5,2.5c0.05,0,0.1-0.01,0.16-0.02l1.64,1.64 C12.67,18.12,12,19.98,12,22c2.02,0,3.88-0.67,5.38-1.79l1.69,1.69c0.39,0.39,1.02,0.39,1.41,0l0,0c0.39-0.39,0.39-1.02,0-1.41 L3.51,3.51C3.12,3.12,2.49,3.12,2.1,3.51z');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
