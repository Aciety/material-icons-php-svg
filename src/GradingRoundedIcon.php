<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['approve', 'check', 'complete', 'document', 'done', 'feedback', 'grade', 'mark', 'ok', 'reviewed', 'select', 'star_boarder', 'star_border_purple500', 'star_outline', 'star_purple500', 'star_rate', 'tick', 'validate', 'verified', 'writing', 'yes'],
)]
final class GradingRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M5,7h14c0.55,0,1,0.45,1,1v0c0,0.55-0.45,1-1,1H5C4.45,9,4,8.55,4,8v0C4,7.45,4.45,7,5,7z');
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M5,13h14c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1H5c-0.55,0-1,0.45-1,1v0C4,12.55,4.45,13,5,13z');
        $l0I1->addChild($l1I1);
        $l1I2 = new SVGPath(d: 'M5,17h5c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1H5c-0.55,0-1,0.45-1,1v0C4,16.55,4.45,17,5,17z');
        $l0I1->addChild($l1I2);
        $l1I3 = new SVGPath(d: 'M5,21h5c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1H5c-0.55,0-1,0.45-1,1v0C4,20.55,4.45,21,5,21z');
        $l0I1->addChild($l1I3);
        $l1I4 = new SVGPath(d: 'M15.41,18.17l-0.71-0.71c-0.39-0.39-1.02-0.39-1.41,0l0,0c-0.39,0.39-0.39,1.02,0,1.41l1.42,1.42 c0.39,0.39,1.02,0.39,1.41,0l3.17-3.17c0.39-0.39,0.39-1.02,0-1.41l0,0c-0.39-0.39-1.02-0.39-1.41,0L15.41,18.17z');
        $l0I1->addChild($l1I4);
        $l1I5 = new SVGPath(d: 'M4,4L4,4c0,0.55,0.45,1,1,1h14c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1H5C4.45,3,4,3.45,4,4z');
        $l0I1->addChild($l1I5);
        $doc->addChild($l0I1);
    }
}
