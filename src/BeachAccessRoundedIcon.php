<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['places'],
    tags: ['access', 'beach', 'places', 'summer', 'sunny', 'umbrella'],
)]
final class BeachAccessRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M13.13 14.56l1.43-1.43 5.73 5.73c.39.39.39 1.03 0 1.43-.39.39-1.03.39-1.43 0l-5.73-5.73zm4.29-5.73l1.27-1.27c.89-.89.77-2.43-.31-3.08-3.89-2.38-9.03-1.89-12.4 1.47 3.93-1.3 8.31-.25 11.44 2.88zM5.95 5.98c-3.36 3.37-3.85 8.51-1.48 12.4.66 1.08 2.19 1.21 3.08.31l1.27-1.27C5.7 14.29 4.65 9.91 5.95 5.98zm.02-.02l-.01.01c-.38 3.01 1.17 6.88 4.3 10.02l5.73-5.73c-3.13-3.13-7.01-4.68-10.02-4.3z');
        $doc->addChild($l0I1);
    }
}
