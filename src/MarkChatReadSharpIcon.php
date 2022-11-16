<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class MarkChatReadSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: '0', y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M12.03,17.5C12.01,17.67,12,17.83,12,18v0H6l-4,4V2h20v8.68C21.09,10.25,20.08,10,19,10c-3.87,0-7,3.13-7,7 C12,17.17,12.01,17.33,12.03,17.5z M23,14.34l-1.41-1.41l-4.24,4.24l-2.12-2.12l-1.41,1.41L17.34,20L23,14.34z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
