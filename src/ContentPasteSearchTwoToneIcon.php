<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['content'],
    tags: ['clipboard', 'content', 'doc', 'document', 'file', 'find', 'paste', 'search', 'trace', 'track'],
)]
final class ContentPasteSearchTwoToneIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M10,16.5c0-3.58,2.92-6.5,6.5-6.5c0.89,0,1.73,0.18,2.5,0.5V5h-2v3H7V5H5v14h5.5 C10.18,18.23,10,17.39,10,16.5z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M10.5,19H5V5h2v3h10V5h2v5.5c0.75,0.31,1.42,0.76,2,1.32V5c0-1.1-0.9-2-2-2h-4.18C14.4,1.84,13.3,1,12,1S9.6,1.84,9.18,3 H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h6.82C11.27,20.42,10.81,19.75,10.5,19z M12,3c0.55,0,1,0.45,1,1s-0.45,1-1,1s-1-0.45-1-1 S11.45,3,12,3z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M20.3,18.9c0.4-0.7,0.7-1.5,0.7-2.4c0-2.5-2-4.5-4.5-4.5S12,14,12,16.5s2,4.5,4.5,4.5c0.9,0,1.7-0.3,2.4-0.7l2.7,2.7 l1.4-1.4L20.3,18.9z M16.5,19c-1.4,0-2.5-1.1-2.5-2.5c0-1.4,1.1-2.5,2.5-2.5s2.5,1.1,2.5,2.5C19,17.9,17.9,19,16.5,19z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
