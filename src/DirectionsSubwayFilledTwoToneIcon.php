<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['automobile', 'car', 'cars', 'direction', 'directions', 'filled', 'maps', 'public', 'rail', 'subway', 'train', 'transportation', 'vehicle'],
)]
final class DirectionsSubwayFilledTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: '0', width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M13,5h4.67C17.13,4.46,15.71,4,12,4C8.48,4,7.03,4.48,6.43,5H11H13z');
        $l2I0->setStyle('enable-background', 'new');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M6,15.5C6,16.33,6.67,17,7.5,17h9c0.83,0,1.5-0.67,1.5-1.5V12H6V15.5z M15.5,13c0.83,0,1.5,0.67,1.5,1.5S16.33,16,15.5,16S14,15.33,14,14.5S14.67,13,15.5,13z M8.5,13c0.83,0,1.5,0.67,1.5,1.5 S9.33,16,8.5,16S7,15.33,7,14.5S7.67,13,8.5,13z');
        $l2I1->setStyle('enable-background', 'new');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M12,2C8,2,4,2.5,4,6v9.5C4,17.43,5.57,19,7.5,19L6,20v1h12v-1l-1.5-1c1.93,0,3.5-1.57,3.5-3.5V6C20,2.5,16.42,2,12,2z M12,4c3.71,0,5.13,0.46,5.67,1H13h-2H6.43C7.03,4.48,8.48,4,12,4z M6,7h5v3H6V7z M18,15.5c0,0.83-0.67,1.5-1.5,1.5h-9 C6.67,17,6,16.33,6,15.5V12h12V15.5z M18,10h-5V7h5V10z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGCircle(cx: '8.5', cy: '14.5', r: '1.5');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGCircle(cx: '15.5', cy: '14.5', r: '1.5');
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
