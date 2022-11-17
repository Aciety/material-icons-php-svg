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
    tags: ['alt', 'comfy', 'cozy', 'design', 'format', 'layout', 'view', 'web'],
)]
final class ViewComfyAltTwoToneIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M4,18h16V6H4V18z M13,7h4v4h-4V7z M13,13h4v4h-4V13z M7,7h4v4H7V7z M7,13h4v4H7V13z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '7', y: '7', width: '4', height: '4');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '13', y: '7', width: '4', height: '4');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '7', y: '13', width: '4', height: '4');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGRect(x: '13', y: '13', width: '4', height: '4');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M20,4H4C2.9,4,2,4.9,2,6v12c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V6C22,4.9,21.1,4,20,4z M20,18H4V6h16V18z');
        $l1I0->addChild($l2I5);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
