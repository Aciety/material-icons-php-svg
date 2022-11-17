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
final class SportsVolleyballRoundedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M6,4.01C3.58,5.84,2,8.73,2,12c0,1.46,0.32,2.85,0.89,4.11L6,14.31V4.01z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M11,11.42V2.05C9.94,2.16,8.93,2.43,8,2.84v10.32L11,11.42z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M12,13.15l-8.11,4.68c0.61,0.84,1.34,1.59,2.18,2.2L15,14.89L12,13.15z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M13,7.96v3.46l8.11,4.68c0.42-0.93,0.7-1.93,0.82-2.98L13,7.96z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M8.07,21.2C9.28,21.71,10.6,22,12,22c3.34,0,6.29-1.65,8.11-4.16L17,16.04L8.07,21.2z');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M21.92,10.81c-0.55-4.63-4.26-8.3-8.92-8.76v3.6L21.92,10.81z');
        $l1I0->addChild($l2I5);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
