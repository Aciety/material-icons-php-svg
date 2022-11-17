<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['adjust', 'auto', 'awesome', 'collage', 'edit', 'editing', 'enhance', 'image', 'mosaic', 'photo'],
)]
final class AutoAwesomeMosaicOutlinedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M3,5v14c0,1.1,0.89,2,2,2h6V3H5C3.89,3,3,3.9,3,5z M9,19H5V5h4V19z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M19,3h-6v8h8V5C21,3.9,20.1,3,19,3z M19,9h-4V5h4V9z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M13,21h6c1.1,0,2-0.9,2-2v-6h-8V21z M15,15h4v4h-4V15z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
