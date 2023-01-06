<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['cable', 'connection', 'connectivity', 'definition', 'input', 'plug', 'plugin', 'points', 'settings', 'standard', 'svideo', 'video'],
)]
final class SettingsInputSvideoRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10s10-4.48,10-10S17.52,2,12,2z M12,20c-4.42,0-8-3.58-8-8s3.58-8,8-8s8,3.58,8,8 S16.42,20,12,20z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '7.5', cy: '11.5', r: '1.5');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGCircle(cx: '16.5', cy: '11.5', r: '1.5');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGCircle(cx: '9', cy: '16', r: '1.5');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGCircle(cx: '15', cy: '16', r: '1.5');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M15,7.5C15,6.67,14.33,6,13.5,6h-3C9.67,6,9,6.67,9,7.5S9.67,9,10.5,9h3C14.33,9,15,8.33,15,7.5z');
        $l1I0->addChild($l2I5);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
