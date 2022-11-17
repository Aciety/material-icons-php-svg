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
    tags: ['arrow', 'arrows', 'check', 'done', 'down', 'download', 'downloads', 'drive', 'file', 'install', 'installed', 'tick', 'upload'],
)]
final class FileDownloadDoneSharpIcon extends SVG
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
        $l2I0 = new SVGPolygon(points: [[20.13, 5.41], [18.72, 4], [9.529999999999999, 13.19], [5.28, 8.949999999999999], [3.87, 10.36], [9.529999999999999, 16.02]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '5', y: '18', width: '14', height: '2');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
