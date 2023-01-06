<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['add', 'app', 'application', 'backup', 'cloud', 'drive', 'files', 'folders', 'gdrive', 'google', 'recovery', 'shortcut', 'storage'],
)]
final class AddToDriveOutlinedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: '0', y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M19,11c0.17,0,0.33,0.01,0.49,0.02L15,3H9l5.68,9.84C15.77,11.71,17.3,11,19,11z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[8.15, 4.52], [2, 15.5], [5, 21], [11.33, 10.03]]);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M13.2,15.5H9.9L6.73,21h7.81C13.58,19.94,13,18.54,13,17C13,16.48,13.07,15.98,13.2,15.5z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPolygon(points: [[20, 16], [20, 13], [18, 13], [18, 16], [15, 16], [15, 18], [18, 18], [18, 21], [19, 21], [20, 21], [20, 18], [23, 18], [23, 16]]);
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
