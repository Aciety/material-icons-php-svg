<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['places'],
    tags: ['air', 'bathroom', 'dry', 'dryer', 'fingers', 'gesture', 'hand', 'wc'],
)]
final class DryTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M10,21H4c-0.55,0-1-0.45-1-1v-6c0-0.39,0.23-0.64,0.36-0.75L7,9.87V12l3,0V21z');
        $l1I1->setStyle('opacity', '.3');
        $l0I0->addChild($l1I1);
        $l1I2 = new SVGPath(d: 'M20.75,16c0.69,0,1.25-0.56,1.25-1.25s-0.56-1.25-1.25-1.25H12v-1h6.75c0.69,0,1.25-0.56,1.25-1.25 c0-0.67-0.53-1.2-1.18-1.24L8.87,10l1.48-2.6c0.09-0.17,0.14-0.34,0.14-0.54c0-0.26-0.09-0.5-0.26-0.7L9.12,5l-7.18,6.8 C1.34,12.36,1,13.15,1,13.97V20c0,1.66,1.34,3,3,3h13.75c0.69,0,1.25-0.56,1.25-1.25s-0.56-1.25-1.25-1.25H12v-1h7.75 c0.69,0,1.25-0.56,1.25-1.25S20.44,17,19.75,17H12v-1H20.75z M10,21H4c-0.55,0-1-0.45-1-1v-6c0-0.39,0.23-0.64,0.36-0.75L7,9.87V12 l3,0V21z M15.65,4.86l-0.07-0.07c-0.57-0.62-0.82-1.41-0.67-2.2L15,2h-1.89l-0.06,0.43c-0.2,1.36,0.27,2.71,1.3,3.72l0.07,0.06 c0.57,0.62,0.82,1.41,0.67,2.2L14.98,9h1.91l0.06-0.43C17.16,7.21,16.68,5.86,15.65,4.86z M19.65,4.86l-0.07-0.07 c-0.57-0.62-0.82-1.41-0.67-2.2L19,2h-1.89l-0.06,0.43c-0.2,1.36,0.27,2.71,1.3,3.72l0.07,0.06c0.57,0.62,0.82,1.41,0.67,2.2 L18.98,9h1.91l0.06-0.43C21.16,7.21,20.68,5.86,19.65,4.86z');
        $l0I0->addChild($l1I2);
        $doc->addChild($l0I0);
    }
}
