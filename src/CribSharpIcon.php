<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

final class CribSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20,9h-8V4H8C5.79,4,4,5.79,4,8v8h4v2.93c-0.61-0.35-1.16-0.78-1.65-1.27l-1.42,1.42C6.74,20.88,9.24,22,12,22 c2.76,0,5.26-1.12,7.07-2.93l-1.42-1.42c-0.49,0.49-1.05,0.92-1.65,1.27V16h4V9z M14,19.75C13.36,19.91,12.69,20,12,20 c-0.69,0-1.36-0.09-2-0.25V16h4V19.75z');
        $doc->addChild($l0I1);
    }
}
