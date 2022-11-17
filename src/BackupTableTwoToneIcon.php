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
final class BackupTableTwoToneIcon extends SVG
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
        $l2I0 = new SVGRect(x: '11', y: '11', width: '5', height: '5');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '4', y: '11', width: '5', height: '5');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '4', y: '4', width: '12', height: '5');
        $l2I2->setStyle('opacity', '.3');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M20,6v14H6v2h14c1.1,0,2-0.9,2-2V6H20z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M18,16V4c0-1.1-0.9-2-2-2H4C2.9,2,2,2.9,2,4v12c0,1.1,0.9,2,2,2h12C17.1,18,18,17.1,18,16z M4,4h12v5H4V4z M9,16H4v-5h5 V16z M11,11h5v5h-5V11z');
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
