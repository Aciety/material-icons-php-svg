<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['accessibility', 'accessible', 'caption', 'cc', 'closed', 'disabled', 'enabled', 'language', 'off', 'on', 'slash', 'subtitle', 'subtitles', 'translate', 'video'],
)]
final class SubtitlesOffRoundedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M20,4H6.83l8,8H19c0.55,0,1,0.45,1,1c0,0.55-0.45,1-1,1h-2.17l4.93,4.93C21.91,18.65,22,18.34,22,18V6C22,4.9,21.1,4,20,4 z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M20,20l-6-6l-1.71-1.71L12,12L3.16,3.16c-0.39-0.39-1.02-0.39-1.41,0c-0.39,0.39-0.39,1.02,0,1.41l0.49,0.49 C2.09,5.35,2,5.66,2,6v12c0,1.1,0.9,2,2,2h13.17l2.25,2.25c0.39,0.39,1.02,0.39,1.41,0c0.39-0.39,0.39-1.02,0-1.41L20,20z M8,13 c0,0.55-0.45,1-1,1H5c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1h2C7.55,12,8,12.45,8,13z M14,17c0,0.55-0.45,1-1,1H5 c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1h8c0.08,0,0.14,0.03,0.21,0.04l0.74,0.74C13.97,16.86,14,16.92,14,17z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
