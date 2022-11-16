<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

final class ExtensionSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20.36 11H19V5h-6V3.64c0-1.31-.94-2.5-2.24-2.63C9.26.86 8 2.03 8 3.5V5H2.01v5.8H3.4c1.31 0 2.5.88 2.75 2.16.33 1.72-.98 3.24-2.65 3.24H2V22h5.8v-1.4c0-1.31.88-2.5 2.16-2.75 1.72-.33 3.24.98 3.24 2.65V22H19v-6h1.5c1.47 0 2.64-1.26 2.49-2.76-.13-1.3-1.33-2.24-2.63-2.24z');
        $doc->addChild($l0I1);
    }
}
