<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['accept', 'arrows', 'direction', 'finger', 'hands', 'hit', 'navigation', 'right', 'strike', 'swing', 'swpie', 'take'],
)]
final class SwipeRightRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M12,1C7.19,1,3.7,3.39,2.41,5.92C2.16,6.41,2.53,7,3.09,7c0.28,0,0.54-0.15,0.66-0.4C4.73,4.69,7.58,2.5,12,2.5 c3.03,0,5.79,1.14,7.91,3h-2.16C17.34,5.5,17,5.84,17,6.25S17.34,7,17.75,7H21c0.55,0,1-0.45,1-1V2.75C22,2.34,21.66,2,21.25,2 S20.5,2.34,20.5,2.75v1.27C18.18,2.13,15.22,1,12,1z M5.2,17.43c0-0.65,0.6-1.13,1.24-0.99L10,17.24V6.5C10,5.67,10.67,5,11.5,5 S13,5.67,13,6.5v6h0.91c0.31,0,0.62,0.07,0.89,0.21l4.09,2.04c0.77,0.38,1.21,1.22,1.09,2.07l-0.63,4.46 C19.21,22.27,18.36,23,17.37,23h-6.16c-0.53,0-1.29-0.21-1.66-0.59l-4.07-4.29C5.3,17.94,5.2,17.69,5.2,17.43z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
