<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['hardware'],
    tags: ['button', 'command key', 'control', 'keyboard'],
)]
final class KeyboardCommandKeyRoundedIcon extends SVG
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
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M17.5,3C15.57,3,14,4.57,14,6.5V8h-4V6.5C10,4.57,8.43,3,6.5,3S3,4.57,3,6.5S4.57,10,6.5,10H8v4H6.5 C4.57,14,3,15.57,3,17.5S4.57,21,6.5,21s3.5-1.57,3.5-3.5V16h4v1.5c0,1.93,1.57,3.5,3.5,3.5s3.5-1.57,3.5-3.5S19.43,14,17.5,14H16 v-4h1.5c1.93,0,3.5-1.57,3.5-3.5S19.43,3,17.5,3L17.5,3z M16,8V6.5C16,5.67,16.67,5,17.5,5S19,5.67,19,6.5S18.33,8,17.5,8H16L16,8 z M6.5,8C5.67,8,5,7.33,5,6.5S5.67,5,6.5,5S8,5.67,8,6.5V8H6.5L6.5,8z M10,14v-4h4v4H10L10,14z M17.5,19c-0.83,0-1.5-0.67-1.5-1.5 V16h1.5c0.83,0,1.5,0.67,1.5,1.5S18.33,19,17.5,19L17.5,19z M6.5,19C5.67,19,5,18.33,5,17.5S5.67,16,6.5,16H8v1.5 C8,18.33,7.33,19,6.5,19L6.5,19z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
