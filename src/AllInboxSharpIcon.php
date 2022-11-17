<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['Inbox', 'all', 'delivered', 'delivery', 'email', 'mail', 'message', 'send'],
)]
final class AllInboxSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M21 3H3v11h18V3zm-2 6h-4c0 1.62-1.38 3-3 3s-3-1.38-3-3H5V5h14v4zm-4 7h6v5H3v-5h6c0 1.66 1.34 3 3 3s3-1.34 3-3z');
        $doc->addChild($l0I1);
    }
}
