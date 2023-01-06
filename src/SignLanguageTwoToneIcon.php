<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['social'],
    tags: ['communication', 'deaf', 'fingers', 'gesture', 'hand', 'language', 'sign'],
)]
final class SignLanguageTwoToneIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M14,13.2V15h-2v7h4c0.55,0,1-0.45,1-1v-4.53c0-0.27-0.11-0.54-0.31-0.73L14,13.2z M15.38,9l1.93-1.87 l1.38,1.45L20,7.34v3.7c0,0.28-0.11,0.54-0.31,0.73l-0.7,0.66L15.38,9z');
        $l1I0->setStyle('opacity', '.3');
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M12.49,13l-0.93-1.86c-0.37-0.74-0.07-1.64,0.67-2.01L12.49,9l5.73,5.46c0.5,0.47,0.78,1.13,0.78,1.81v5.23 c0,1.38-1.12,2.5-2.5,2.5h-11c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1H10v-1H4c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1h6v-1H3 c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1h7v-1H4.5c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1H12.49z M14,13.2V15h-2v7h4 c0.55,0,1-0.45,1-1v-4.53c0-0.27-0.11-0.54-0.31-0.73L14,13.2z M11.78,7.12c-0.84,0.4-1.17,0.62-1.63,1.19l-2.7-2.85 c-0.38-0.4-0.36-1.03,0.04-1.41c0.4-0.38,1.03-0.36,1.41,0.04L11.78,7.12z M9.64,9.21C9.41,9.76,9.35,10.45,9.44,11H8.58L6.31,8.61 C5.93,8.21,5.94,7.58,6.35,7.2c0.4-0.38,1.03-0.36,1.41,0.04L9.64,9.21z M20.33,13.91l0.88-0.83c0.5-0.47,0.79-1.13,0.79-1.82V3.35 l-0.27-0.1c-0.78-0.28-1.64,0.12-1.92,0.9L19.1,6.11l-5.5-5.8c-0.38-0.4-1.01-0.42-1.41-0.04c-0.4,0.38-0.42,1.01-0.04,1.41 l3.79,3.99l-0.73,0.69l-4.82-5.08c-0.38-0.4-1.01-0.42-1.41-0.04c-0.4,0.38-0.42,1.01-0.04,1.41l3.78,3.98L15.38,9l1.93-1.87 l1.38,1.45L20,7.34v3.7c0,0.28-0.11,0.54-0.31,0.73l-0.7,0.66l0.61,0.58C19.89,13.28,20.13,13.58,20.33,13.91z');
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
