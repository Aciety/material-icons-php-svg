<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

final class ConnectingAirportsRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M15.93,10.6c0.39,0,0.66,0.37,0.55,0.74L15.4,15h2.85l0.59-0.78c0.1-0.14,0.26-0.22,0.43-0.22c0.36,0,0.62,0.35,0.52,0.7 L19.4,16l0.39,1.3c0.1,0.35-0.16,0.7-0.52,0.7c-0.17,0-0.33-0.08-0.43-0.22L18.25,17H15.4l1.08,3.66c0.11,0.37-0.17,0.74-0.55,0.74 c-0.2,0-0.39-0.11-0.5-0.28L13,17h-2.97c-0.53,0-1-0.4-1.03-0.93C8.96,15.48,9.43,15,10,15h3l2.43-4.12 C15.54,10.71,15.73,10.6,15.93,10.6z M8.07,2.6c-0.39,0-0.66,0.37-0.55,0.74L8.6,7H5.75L5.16,6.22C5.06,6.08,4.9,6,4.73,6 C4.37,6,4.11,6.35,4.21,6.7L4.6,8L4.21,9.3C4.11,9.65,4.37,10,4.73,10c0.17,0,0.33-0.08,0.43-0.22L5.75,9H8.6l-1.08,3.66 c-0.11,0.37,0.17,0.74,0.55,0.74c0.2,0,0.39-0.11,0.5-0.28L11,9h2.97c0.53,0,1-0.4,1.03-0.93C15.04,7.48,14.57,7,14,7h-3L8.57,2.88 C8.46,2.71,8.27,2.6,8.07,2.6z');
        $doc->addChild($l0I1);
    }
}