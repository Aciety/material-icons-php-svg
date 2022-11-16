<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

final class CribRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M18.32,18.32c-0.36-0.36-0.92-0.4-1.31-0.08c-0.32,0.25-0.65,0.48-1,0.69V16h2c1.1,0,2-0.9,2-2v-3c0-1.1-0.9-2-2-2h-6V6 c0-1.1-0.9-2-2-2H8C5.79,4,4,5.79,4,8v6c0,1.1,0.9,2,2,2h2v2.93c-0.35-0.2-0.69-0.43-1-0.69c-0.39-0.32-0.96-0.27-1.31,0.08 c-0.42,0.42-0.39,1.12,0.08,1.5C7.47,21.18,9.64,22,12,22c2.36,0,4.53-0.82,6.24-2.18C18.71,19.44,18.74,18.74,18.32,18.32z M14,19.75C13.36,19.91,12.69,20,12,20c-0.69,0-1.36-0.09-2-0.25V16h4V19.75z');
        $doc->addChild($l0I1);
    }
}
