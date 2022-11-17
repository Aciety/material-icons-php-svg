<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['Android', 'OS', 'cell', 'connection', 'data', 'device', 'hardware', 'iOS', 'mobile', 'network', 'phone', 'phonelink', 'ring', 'service', 'signal', 'tablet', 'wireless'],
)]
final class PhonelinkRingRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M14 1H4c-1.1 0-2 .9-2 2v18c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V3c0-1.1-.9-2-2-2zm0 19H4V4h10v16zm6.63-11.74c-.26-.32-.74-.36-1.04-.06l-.03.03c-.25.25-.26.65-.05.93 1.26 1.64 1.25 3.87-.02 5.57-.21.28-.19.67.05.92l.05.05c.29.29.76.26 1.03-.05 1.8-2.13 1.8-5.19.01-7.39zm-3.21 2.11l-.06.06c-.2.2-.26.5-.15.76.21.49.21 1.03 0 1.52-.11.26-.05.56.15.76l.08.08c.32.32.87.25 1.09-.15.49-.89.49-1.94-.01-2.86-.22-.42-.77-.5-1.1-.17z');
        $doc->addChild($l0I1);
    }
}
