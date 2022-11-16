<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

final class DataUsageRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M13 3.87v.02c0 .67.45 1.23 1.08 1.43C16.93 6.21 19 8.86 19 12c0 .52-.06 1.01-.17 1.49-.14.64.12 1.3.69 1.64l.01.01c.86.5 1.98.05 2.21-.91.17-.72.26-1.47.26-2.23 0-4.5-2.98-8.32-7.08-9.57-.95-.29-1.92.44-1.92 1.44zm-2.06 15.05c-2.99-.43-5.42-2.86-5.86-5.84-.54-3.6 1.66-6.77 4.83-7.76.64-.19 1.09-.76 1.09-1.43v-.02c0-1-.97-1.73-1.93-1.44-4.51 1.38-7.66 5.86-6.98 10.96.59 4.38 4.13 7.92 8.51 8.51 3.14.42 6.04-.61 8.13-2.53.74-.68.61-1.89-.26-2.39-.58-.34-1.3-.23-1.8.22-1.47 1.34-3.51 2.05-5.73 1.72z');
        $doc->addChild($l0I1);
    }
}
