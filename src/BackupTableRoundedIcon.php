<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['backup', 'drive', 'files folders', 'format', 'layout', 'stack', 'storage', 'table'],
)]
final class BackupTableRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l2I0->setStyle('fill', 'none');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l2I1->setStyle('fill', 'none');
        $l1I0->addChild($l2I1);
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M4,7v13h13c0.55,0,1,0.45,1,1l0,0c0,0.55-0.45,1-1,1H4c-1.1,0-2-0.9-2-2V7c0-0.55,0.45-1,1-1l0,0C3.55,6,4,6.45,4,7z');
        $l2I0->addChild($l3I0);
        $l3I1 = new SVGPath(d: 'M6,4v12c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V4c0-1.1-0.9-2-2-2H8C6.9,2,6,2.9,6,4z M15,11h5v5h-5V11z M8,11h5v5H8V11z M8,4h12v5H8V4z');
        $l2I0->addChild($l3I1);
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
