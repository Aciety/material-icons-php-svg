<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['image'],
    tags: ['disabled', 'enabled', 'hide', 'image', 'landscape', 'mountain', 'mountains', 'off', 'on', 'photo', 'photography', 'picture', 'slash'],
)]
final class HideImageRoundedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M19,3H5.83L21,18.17V5C21,3.9,20.1,3,19,3z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M3.51,3.51c-0.39-0.39-1.02-0.39-1.41,0c-0.39,0.39-0.39,1.02,0,1.41L3,5.83V19c0,1.1,0.9,2,2,2h13.17l0.9,0.9 c0.39,0.39,1.02,0.39,1.41,0c0.39-0.39,0.39-1.02,0-1.41L3.51,3.51z M7,17c-0.41,0-0.65-0.47-0.4-0.8l2-2.67 c0.2-0.27,0.6-0.27,0.8,0L11.25,16l0.82-1.1l2.1,2.1H7z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
