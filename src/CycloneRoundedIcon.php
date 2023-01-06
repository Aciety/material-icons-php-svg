<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['social'],
    tags: ['crisis', 'disaster', 'natural', 'rain', 'storm', 'weather', 'wind', 'winds'],
)]
final class CycloneRoundedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M12,8c-2.21,0-4,1.79-4,4c0,2.21,1.79,4,4,4c2.21,0,4-1.79,4-4C16,9.79,14.21,8,12,8z M12,14c-1.1,0-2-0.9-2-2 c0-1.1,0.9-2,2-2s2,0.9,2,2C14,13.1,13.1,14,12,14z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M22,6.11L22,6.11c0-0.46-0.3-0.86-0.74-0.97C19.23,4.6,16.03,4,12,4C9.85,4,7.89,4.86,6.46,6.24 c0.1-0.65,0.28-1.69,0.62-2.96C7.25,2.64,6.78,2,6.11,2h0C5.66,2,5.26,2.3,5.14,2.74C4.6,4.77,4,7.97,4,12 c0,2.15,0.86,4.11,2.24,5.54c-0.65-0.1-1.69-0.28-2.96-0.62C2.64,16.75,2,17.22,2,17.89v0c0,0.46,0.3,0.86,0.74,0.97 C4.77,19.4,7.97,20,12,20c2.15,0,4.11-0.86,5.54-2.24c-0.1,0.65-0.28,1.69-0.62,2.96c-0.17,0.64,0.3,1.28,0.97,1.28h0 c0.46,0,0.86-0.3,0.97-0.74C19.4,19.23,20,16.03,20,12c0-2.15-0.86-4.11-2.24-5.54c0.65,0.1,1.69,0.28,2.96,0.62 C21.36,7.25,22,6.78,22,6.11z M12,18c-3.31,0-6-2.69-6-6s2.69-6,6-6s6,2.69,6,6S15.31,18,12,18z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
