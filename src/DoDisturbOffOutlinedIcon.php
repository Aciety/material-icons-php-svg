<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['notification'],
    tags: ['cancel', 'close', 'denied', 'deny', 'disabled', 'disturb', 'do', 'enabled', 'off', 'on', 'remove', 'silence', 'slash', 'stop'],
)]
final class DoDisturbOffOutlinedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12 4c4.41 0 8 3.59 8 8 0 1.41-.37 2.73-1.01 3.88l1.46 1.46C21.43 15.79 22 13.96 22 12c0-5.52-4.48-10-10-10-1.96 0-3.79.57-5.33 1.55l1.46 1.46C9.27 4.37 10.59 4 12 4zm5 7h-2.88l2 2H17zM2.41 2.13L1 3.54l2.78 2.78C2.66 7.93 2 9.89 2 12c0 5.52 4.48 10 10 10 2.11 0 4.07-.66 5.68-1.78L20.46 23l1.41-1.41L2.41 2.13zM12 20c-4.41 0-8-3.59-8-8 0-1.56.45-3 1.23-4.23L8.46 11H7v2h3.46l5.77 5.77C15 19.55 13.56 20 12 20z');
        $doc->addChild($l0I1);
    }
}
