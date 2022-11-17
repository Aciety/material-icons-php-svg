<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['home'],
    tags: ['eco', 'energy', 'leaf', 'leaves', 'nest', 'savings', 'usage'],
)]
final class EnergySavingsLeafTwoToneIcon extends SVG
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
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M7.1,7.01C5.74,8.32,5,10.1,5,12c0,3.86,3.14,7,7,7c1.87,0,3.63-0.73,4.95-2.05C18.27,15.63,19,13.87,19,12V5h-7 C10.16,5,8.42,5.71,7.1,7.01z M13.88,7.12c0.14,0.14,0.16,0.36,0.04,0.52l-2.44,3.33l4.05,0.4c0.44,0.04,0.63,0.59,0.3,0.89 l-5.16,4.63c-0.16,0.15-0.41,0.14-0.56-0.01c-0.14-0.14-0.16-0.36-0.04-0.52l2.44-3.33l-4.05-0.4c-0.44-0.04-0.63-0.59-0.3-0.89 l5.16-4.63C13.48,6.96,13.73,6.97,13.88,7.12z');
        $l2I0->addChild($l3I0);
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M12,3C12,3,12,3,12,3c-4.8,0-9,3.86-9,9c0,2.12,0.74,4.07,1.97,5.61L3,19.59L4.41,21l1.97-1.97C7.93,20.26,9.88,21,12,21 c2.3,0,4.61-0.88,6.36-2.64C20.12,16.61,21,14.3,21,12V3H12z M19,12c0,1.87-0.73,3.63-2.05,4.95C15.63,18.27,13.87,19,12,19 c-3.86,0-7-3.14-7-7c0-1.9,0.74-3.68,2.1-4.99C8.42,5.71,10.16,5,12,5h7V12z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M8.46,12.63l4.05,0.4l-2.44,3.33c-0.11,0.16-0.1,0.38,0.04,0.52c0.15,0.15,0.4,0.16,0.56,0.01l5.16-4.63 c0.33-0.3,0.15-0.85-0.3-0.89l-4.05-0.4l2.44-3.33c0.11-0.16,0.1-0.38-0.04-0.52c-0.15-0.15-0.4-0.16-0.56-0.01l-5.16,4.63 C7.84,12.04,8.02,12.59,8.46,12.63z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
