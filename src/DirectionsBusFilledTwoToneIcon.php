<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['automobile', 'bus', 'car', 'cars', 'direction', 'directions', 'filled', 'maps', 'public', 'transportation', 'vehicle'],
)]
final class DirectionsBusFilledTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: '0', width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M6,15c0,1.1,0.9,2,2,2h8c1.1,0,2-0.9,2-2v-3H6V15z M15.5,13 c0.83,0,1.5,0.67,1.5,1.5S16.33,16,15.5,16S14,15.33,14,14.5S14.67,13,15.5,13z M8.5,13c0.83,0,1.5,0.67,1.5,1.5S9.33,16,8.5,16 S7,15.33,7,14.5S7.67,13,8.5,13z');
        $l2I0->setStyle('enable-background', 'new');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M12,4C8.48,4,7.03,4.48,6.43,5h11.24C17.13,4.46,15.71,4,12,4z');
        $l2I1->setStyle('enable-background', 'new');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M12,2C8,2,4,2.5,4,6v9.5c0,0.95,0.38,1.81,1,2.44V20c0,0.55,0.45,1,1,1h1c0.55,0,1-0.45,1-1v-1h8v1c0,0.55,0.45,1,1,1h1 c0.55,0,1-0.45,1-1v-2.06c0.62-0.63,1-1.49,1-2.44V6C20,2.5,16.42,2,12,2z M12,4c3.71,0,5.13,0.46,5.67,1H6.43 C7.03,4.48,8.48,4,12,4z M18,15c0,1.1-0.9,2-2,2H8c-1.1,0-2-0.9-2-2v-3h12V15z M18,10H6V7h12V10z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGCircle(cx: '8.5', cy: '14.5', r: '1.5');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGCircle(cx: '15.5', cy: '14.5', r: '1.5');
        $l1I0->addChild($l2I4);
        $l1I0->setStyle('enable-background', 'new');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
