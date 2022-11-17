<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['file'],
    tags: ['data', 'doc', 'document', 'drive', 'file', 'folder', 'sheet', 'slide', 'storage', 'topic'],
)]
final class TopicOutlinedIcon extends SVG
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
        $l1I1 = new SVGPath(d: 'M20,6h-8l-2-2H4C2.9,4,2.01,4.9,2.01,6L2,18c0,1.1,0.9,2,2,2h16.77c0.68,0,1.23-0.56,1.23-1.23V8C22,6.9,21.1,6,20,6z M20,18L4,18V6h5.17l2,2H20V18z M18,12H6v-2h12V12z M14,16H6v-2h8V16z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
