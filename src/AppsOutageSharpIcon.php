<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

final class AppsOutageSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M4,8h4V4H4V8z M10,20h4v-4h-4V20z M4,20h4v-4H4V20z M4,14h4v-4H4V14z M10,14h4v-4h-4V14z M16,20h4v-4h-4V20z M19,0 c-2.76,0-5,2.24-5,5s2.24,5,5,5s5-2.24,5-5S21.76,0,19,0z M19.5,8h-1V7h1V8z M19.5,6h-1V2h1V6z M16,14h4v-2.07 C19.67,11.98,19.34,12,19,12c-1.07,0-2.09-0.24-3-0.68V14z M10,4v4h2.68C12.24,7.09,12,6.07,12,5c0-0.34,0.02-0.67,0.07-1H10z');
        $doc->addChild($l0I1);
    }
}
