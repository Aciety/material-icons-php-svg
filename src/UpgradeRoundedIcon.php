<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['arrow', 'export', 'instal', 'line', 'replace', 'up', 'update', 'upgrade'],
)]
final class UpgradeRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M16,19L16,19c0,0.55-0.45,1-1,1H9c-0.55,0-1-0.45-1-1v0c0-0.55,0.45-1,1-1h6C15.55,18,16,18.45,16,19z M11,7.99V15 c0,0.55,0.45,1,1,1h0c0.55,0,1-0.45,1-1V7.99h1.79c0.45,0,0.67-0.54,0.35-0.85l-2.79-2.78c-0.2-0.19-0.51-0.19-0.71,0L8.86,7.14 C8.54,7.45,8.76,7.99,9.21,7.99H11z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
