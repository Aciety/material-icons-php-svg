<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['notification'],
    tags: ['arrow', 'call', 'cell', 'contact', 'device', 'hardware', 'missed', 'mobile', 'phone', 'telephone'],
)]
final class PhoneMissedSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M23.32 16.67c-2.95-2.79-6.93-4.51-11.31-4.51-4.39 0-8.37 1.72-11.31 4.51l-.69.69L3.65 21l3.93-2.72-.01-3.49c1.4-.45 2.9-.7 4.44-.7 1.55 0 3.04.24 4.44.7l-.01 3.49L20.37 21l3.64-3.64c0-.01-.52-.52-.69-.69zM7 6.43l4.94 4.94 7.07-7.07-1.41-1.42-5.66 5.66L8.4 5H11V3H5v6h2z');
        $doc->addChild($l0I1);
    }
}
