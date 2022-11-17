<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['accessibility', 'accessible', 'caption', 'cc', 'closed', 'disabled', 'enabled', 'language', 'off', 'on', 'slash', 'subtitle', 'subtitles', 'translate', 'video'],
)]
final class SubtitlesOffTwoToneIcon extends SVG
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
        $l2I0 = new SVGPolygon(points: [[8.83, 6], [12.83, 10], [18, 10], [18, 12], [14.83, 12], [20, 17.17], [20, 6]]);
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[15.17, 18], [13.17, 16], [6, 16], [6, 14], [11.17, 14], [8, 10.83], [8, 12], [6, 12], [6, 10], [7.17, 10], [4, 6.83], [4, 18]]);
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGGroup();
        $l3I0 = new SVGPolygon(points: [[18, 10], [12.83, 10], [14.83, 12], [18, 12]]);
        $l2I2->addChild($l3I0);
        $l3I1 = new SVGPath(d: 'M20,4H6.83l2,2H20v11.17l1.76,1.76C21.91,18.65,22,18.34,22,18V6C22,4.9,21.1,4,20,4z');
        $l2I2->addChild($l3I1);
        $l3I2 = new SVGPath(d: 'M1.04,3.87l1.2,1.2C2.09,5.35,2,5.66,2,6v12c0,1.1,0.9,2,2,2h13.17l2.96,2.96l1.41-1.41L2.45,2.45L1.04,3.87z M4,6.83 L7.17,10H6v2h2v-1.17L11.17,14H6v2h7.17l2,2H4V6.83z');
        $l2I2->addChild($l3I2);
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
