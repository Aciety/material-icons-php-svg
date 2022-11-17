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
    tags: ['athlete', 'athletic', 'ball', 'entertainment', 'exercise', 'game', 'hobby', 'social', 'sports', 'volleyball'],
)]
final class SportsVolleyballTwoToneIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M6,6.73C4.76,8.14,4,9.98,4,12c0,1.1,0.23,2.14,0.63,3.1L6,14.31V6.73z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M11,4.08c-0.25,0.06-1.98,0.42-3,1.01v8.07l3-1.73V4.08z');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M13,4.07v1.58l6.54,3.79C18.57,6.59,16.07,4.45,13,4.07z');
        $l2I2->setStyle('opacity', '.3');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M12,13.15l-6.36,3.67c0.64,0.85,1.46,1.55,2.38,2.09L15,14.89L12,13.15z');
        $l2I3->setStyle('opacity', '.3');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M13,7.96v3.46l6.37,3.68c0.4-0.95,0.63-1.99,0.63-3.09L13,7.96z');
        $l2I4->setStyle('opacity', '.3');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M10.42,19.84C10.93,19.94,11.46,20,12,20c2.6,0,4.9-1.25,6.36-3.17L17,16.04L10.42,19.84z');
        $l2I5->setStyle('opacity', '.3');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGPath(d: 'M12,2C6.48,2,2,6.48,2,12c0,5.52,4.48,10,10,10s10-4.48,10-10C22,6.48,17.52,2,12,2z M13,4.07 c3.07,0.38,5.57,2.52,6.54,5.36L13,5.65V4.07z M8,5.08c1.02-0.59,2.75-0.95,3-1.01v7.35l-3,1.73V5.08z M4.63,15.1 C4.23,14.14,4,13.1,4,12c0-2.02,0.76-3.86,2-5.27v7.58L4.63,15.1z M5.64,16.83L12,13.15l3,1.73l-6.98,4.03 C7.09,18.38,6.28,17.68,5.64,16.83z M12,20c-0.54,0-1.07-0.06-1.58-0.16l6.58-3.8l1.36,0.78C16.9,18.75,14.6,20,12,20z M13,11.42 V7.96l7,4.05c0,1.1-0.23,2.14-0.63,3.09L13,11.42z');
        $l1I0->addChild($l2I6);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
