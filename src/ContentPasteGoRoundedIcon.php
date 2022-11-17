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
    tags: ['clipboard', 'content', 'disabled', 'doc', 'document', 'enabled', 'file', 'go', 'on', 'paste', 'slash'],
)]
final class ContentPasteGoRoundedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M5,5h2v1c0,1.1,0.9,2,2,2h6c1.1,0,2-0.9,2-2V5h2v6h2V5c0-1.1-0.9-2-2-2h-4.18C14.4,1.84,13.3,1,12,1S9.6,1.84,9.18,3H5 C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h5v-2H5V5z M12,3c0.55,0,1,0.45,1,1s-0.45,1-1,1s-1-0.45-1-1S11.45,3,12,3z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M21.29,16.29l-2.58-2.58c-0.39-0.39-1.02-0.39-1.41,0c-0.39,0.39-0.39,1.02,0,1.41l0.87,0.88H13c-0.55,0-1,0.45-1,1 c0,0.55,0.45,1,1,1h5.17l-0.87,0.88c-0.39,0.39-0.39,1.02,0,1.41v0c0.39,0.39,1.02,0.39,1.41,0l2.58-2.58 C21.68,17.31,21.68,16.68,21.29,16.29z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
