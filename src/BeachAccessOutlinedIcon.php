<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

final class BeachAccessOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M21 19.57l-1.427 1.428-6.442-6.442 1.43-1.428zM13.12 3c-2.58 0-5.16.98-7.14 2.95l-.01.01c-3.95 3.95-3.95 10.36 0 14.31l14.3-14.31C18.3 3.99 15.71 3 13.12 3zM6.14 17.27C5.4 16.03 5 14.61 5 13.12c0-.93.16-1.82.46-2.67.19 1.91.89 3.79 2.07 5.44l-1.39 1.38zm2.84-2.84C7.63 12.38 7.12 9.93 7.6 7.6c.58-.12 1.16-.18 1.75-.18 1.8 0 3.55.55 5.08 1.56l-5.45 5.45zm1.47-8.97c.85-.3 1.74-.46 2.67-.46 1.49 0 2.91.4 4.15 1.14l-1.39 1.39c-1.65-1.18-3.52-1.88-5.43-2.07z');
        $doc->addChild($l0I1);
    }
}