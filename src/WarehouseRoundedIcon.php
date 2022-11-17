<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['garage', 'industry', 'manufacturing', 'storage', 'warehouse'],
)]
final class WarehouseRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M22,19V8.35c0-0.82-0.5-1.55-1.26-1.86l-8-3.2c-0.48-0.19-1.01-0.19-1.49,0l-8,3.2C2.5,6.8,2,7.54,2,8.35V19 c0,1.1,0.9,2,2,2h3v-9h10v9h3C21.1,21,22,20.1,22,19z M11,19H9v2h2V19z M13,16h-2v2h2V16z M15,19h-2v2h2V19z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
