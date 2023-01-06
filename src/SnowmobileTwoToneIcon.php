<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['automobile', 'car', 'direction', 'skimobile', 'snow', 'snowmobile', 'social', 'sports', 'transportation', 'travel', 'vehicle', 'winter'],
)]
final class SnowmobileTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M17,14h-6.7l-7.45-2.23l0.31-0.62L11.6,12l3.93-2.94c0,0,3.77,3.44,4.27,4.14C19.8,13.2,18.7,14,17,14z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M22,17c0,0.55-0.45,1-1,1h-0.17l-2.2-2.2C20.58,15.37,22,14.4,22,13c0-1-8-8-8-8h-3v2h2.25l0.8,0.72L11,10L2,9l-2,4 l4.54,1.36l-3.49,1.88C-0.77,17.22-0.07,20,2,20h6c2.21,0,4-1.79,4-4h4l2,2h-3v2h6c1.66,0,3-1.34,3-3H22z M8,18H2l5.25-2.83L10,16 C10,17.1,9.11,18,8,18z M17,14h-6.7l-7.45-2.23l0.31-0.62L11.6,12l3.93-2.94c0,0,3.77,3.44,4.27,4.14C19.8,13.2,18.7,14,17,14z');
        $doc->addChild($l0I2);
    }
}
