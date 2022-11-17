<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['av'],
    tags: ['desktop', 'device', 'display', 'from', 'hardware', 'monitor', 'queue', 'remove', 'screen', 'steam'],
)]
final class RemoveFromQueueSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M23 3H1v16h7v2h8v-2h7V3zm-2 14H3V5h18v12zm-5-7v2H8v-2h8z');
        $doc->addChild($l0I1);
    }
}
