<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['file'],
    tags: ['[online]', 'data', 'disabled', 'doc', 'document', 'drive', 'enabled', 'file', 'folder', 'folders', 'off', 'on', 'sheet', 'slash', 'slide', 'storage'],
)]
final class FolderOffSharpIcon extends SVG
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
        $l2I0 = new SVGPolygon(points: [[12, 6], [10, 4], [6.83, 4], [22, 19.17], [22, 6]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[2.1, 2.1], [0.6899999999999999, 3.51], [2, 4.83], [2, 20], [17.17, 20], [20.49, 23.31], [21.9, 21.9]]);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
