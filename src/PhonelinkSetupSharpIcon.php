<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

final class PhonelinkSetupSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M7 1v5h2V4h10v16H9v-2H7v5h14V1zm2.5 14.5c.29-.12.55-.29.8-.48l-.02.03 1.41.55 1.27-2.2-1.18-.95-.02.03c.02-.16.05-.32.05-.48s-.03-.32-.05-.48l.02.03 1.18-.95-1.26-2.2-1.41.55.02.03c-.26-.19-.52-.36-.81-.48L9.27 7H6.73L6.5 8.5c-.29.12-.55.29-.8.48l.02-.03L4.3 8.4l-1.27 2.2 1.18.95.02-.03c-.01.16-.04.32-.04.48s.03.32.05.48l-.02-.03-1.18.95 1.27 2.2 1.41-.55-.02-.03c.25.19.51.36.8.48l.23 1.5h2.54l.23-1.5zM6 12c0-1.1.9-2 2-2s2 .9 2 2-.9 2-2 2-2-.9-2-2z');
        $doc->addChild($l0I1);
    }
}