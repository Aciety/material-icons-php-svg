<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['editor'],
    tags: [],
)]
final class TypeSpecimenRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
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
        $l2I0 = new SVGPath(d: 'M3,6L3,6C2.45,6,2,6.45,2,7v13c0,1.1,0.9,2,2,2h13c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1H4V7C4,6.45,3.55,6,3,6z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M20,2H8C6.9,2,6,2.9,6,4v12c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V4C22,2.9,21.1,2,20,2z M16.46,14.01l-0.63-1.82h-3.63 l-0.65,1.82c-0.1,0.29-0.38,0.48-0.68,0.48h0c-0.51,0-0.86-0.51-0.68-0.98l2.73-7.27C13.08,5.8,13.52,5.5,14,5.5h0 c0.48,0,0.92,0.3,1.09,0.75l2.73,7.27c0.18,0.47-0.17,0.98-0.68,0.98h0C16.83,14.5,16.56,14.31,16.46,14.01z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[13.96, 7.17], [12.65, 10.89], [15.34, 10.89], [14.04, 7.17]]);
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
