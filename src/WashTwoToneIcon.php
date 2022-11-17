<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['places'],
    tags: ['bathroom', 'clean', 'fingers', 'gesture', 'hand', 'wash', 'wc'],
)]
final class WashTwoToneIcon extends SVG
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
        $l1I1 = new SVGPath(d: 'M10,21H4c-0.55,0-1-0.45-1-1v-6c0-0.39,0.23-0.64,0.36-0.75L7,9.87V12l3,0V21z M18.5,6.5c-0.55,0-1-0.45-1-1 c0-0.4,0.43-1.22,1-2.05c0.57,0.83,1,1.65,1,2.05C19.5,6.05,19.05,6.5,18.5,6.5z');
        $l1I1->setStyle('opacity', '.3');
        $l0I0->addChild($l1I1);
        $l1I2 = new SVGPath(d: 'M20.75,16c0.69,0,1.25-0.56,1.25-1.25s-0.56-1.25-1.25-1.25H12v-1h6.75c0.69,0,1.25-0.56,1.25-1.25 c0-0.67-0.53-1.2-1.18-1.24L8.87,10l1.48-2.6c0.09-0.17,0.14-0.34,0.14-0.54c0-0.26-0.09-0.5-0.26-0.7L9.12,5l-7.18,6.8 C1.34,12.36,1,13.15,1,13.97V20c0,1.66,1.34,3,3,3h13.75c0.69,0,1.25-0.56,1.25-1.25s-0.56-1.25-1.25-1.25H12v-1h7.75 c0.69,0,1.25-0.56,1.25-1.25S20.44,17,19.75,17H12v-1H20.75z M10,21H4c-0.55,0-1-0.45-1-1v-6c0-0.39,0.23-0.64,0.36-0.75L7,9.87V12 l3,0V21z M13.5,9C14.33,9,15,8.33,15,7.5C15,6.66,13.5,5,13.5,5S12,6.66,12,7.5C12,8.33,12.67,9,13.5,9z M18.5,1 c0,0-2.5,2.83-2.5,4.5C16,6.88,17.12,8,18.5,8S21,6.88,21,5.5C21,3.83,18.5,1,18.5,1z M18.5,6.5c-0.55,0-1-0.45-1-1 c0-0.4,0.43-1.22,1-2.05c0.57,0.83,1,1.65,1,2.05C19.5,6.05,19.05,6.5,18.5,6.5z');
        $l0I0->addChild($l1I2);
        $doc->addChild($l0I0);
    }
}
