<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

final class Co2RoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M14,9h-3c-0.55,0-1,0.45-1,1v4c0,0.55,0.45,1,1,1h3c0.55,0,1-0.45,1-1v-4C15,9.45,14.55,9,14,9z M13.5,13.5h-2v-3h2V13.5z M20.5,15.5h-2v1h2.25c0.41,0,0.75,0.34,0.75,0.75l0,0c0,0.41-0.34,0.75-0.75,0.75H18c-0.55,0-1-0.45-1-1v-1.5c0-0.55,0.45-1,1-1h2 v-1h-2.25c-0.41,0-0.75-0.34-0.75-0.75v0c0-0.41,0.34-0.75,0.75-0.75h2.75c0.55,0,1,0.45,1,1v1.5C21.5,15.05,21.05,15.5,20.5,15.5z M8,14c0,0.55-0.45,1-1,1H4c-0.55,0-1-0.45-1-1v-4c0-0.55,0.45-1,1-1h3c0.55,0,1,0.45,1,1v0.25C8,10.66,7.66,11,7.25,11 c-0.33,0-0.6-0.21-0.71-0.5c0,0-2.04,0-2.04,0v3l2.04,0c0.1-0.29,0.38-0.5,0.71-0.5C7.66,13,8,13.34,8,13.75V14z');
        $doc->addChild($l0I1);
    }
}