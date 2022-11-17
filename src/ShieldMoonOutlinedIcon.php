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
    tags: ['certified', 'do not disturb', 'moon', 'night', 'privacy', 'private', 'protect', 'protection', 'security', 'shield', 'verified'],
)]
final class ShieldMoonOutlinedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M12,2L4,5v6.09c0,5.05,3.41,9.76,8,10.91c4.59-1.15,8-5.86,8-10.91V5L12,2z M18,11.09c0,4-2.55,7.7-6,8.83 c-3.45-1.13-6-4.82-6-8.83v-4.7l6-2.25l6,2.25V11.09z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M9.01,14.33c1.75,2.17,5.12,2.24,6.96,0.07c0.23-0.27,0.08-0.68-0.26-0.74c-1.29-0.21-2.48-0.98-3.18-2.2 c-0.71-1.22-0.78-2.63-0.32-3.86c0.12-0.33-0.16-0.66-0.51-0.6C8.36,7.62,6.81,11.61,9.01,14.33z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
