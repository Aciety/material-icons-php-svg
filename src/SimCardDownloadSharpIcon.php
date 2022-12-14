<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['arrow', 'camera', 'card', 'chip', 'device', 'down', 'download', 'memory', 'phone', 'sim', 'storage'],
)]
final class SimCardDownloadSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M20,2H10L4,8v14h16V2z M12,17l-4-4h3V9.02L13,9v4h3L12,17z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
