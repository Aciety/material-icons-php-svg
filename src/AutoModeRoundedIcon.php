<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class AutoModeRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M18.06,2.83c-1.15-0.77-2.46-1.32-3.86-1.61C13.58,1.1,13,1.57,13,2.21v0c0,0.46,0.31,0.88,0.76,0.97 c1.17,0.23,2.26,0.7,3.21,1.34c0.39,0.26,0.9,0.19,1.23-0.14l0,0C18.66,3.93,18.59,3.18,18.06,2.83z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M11,2.21L11,2.21c0-0.64-0.58-1.11-1.2-0.99c-1.4,0.29-2.71,0.84-3.86,1.61c-0.52,0.35-0.59,1.1-0.15,1.54l0,0 c0.33,0.33,0.84,0.4,1.23,0.14c0.96-0.64,2.04-1.1,3.21-1.34C10.69,3.09,11,2.67,11,2.21z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M4.38,5.79L4.38,5.79C3.93,5.34,3.18,5.42,2.84,5.94C2.07,7.09,1.51,8.39,1.23,9.8C1.1,10.42,1.58,11,2.21,11h0 c0.46,0,0.88-0.31,0.97-0.76c0.23-1.17,0.7-2.26,1.34-3.22C4.77,6.64,4.7,6.12,4.38,5.79z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M21.79,11L21.79,11c0.63,0,1.11-0.58,0.98-1.2c-0.29-1.4-0.84-2.7-1.61-3.86c-0.35-0.52-1.1-0.6-1.54-0.15l0,0 c-0.33,0.33-0.4,0.84-0.14,1.23c0.64,0.96,1.1,2.05,1.34,3.22C20.91,10.69,21.33,11,21.79,11z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M8,12.46l2.44,1.11L11.54,16c0.18,0.39,0.73,0.39,0.91,0l1.11-2.44L16,12.46c0.39-0.18,0.39-0.73,0-0.91l-2.44-1.11 L12.46,8c-0.18-0.39-0.73-0.39-0.91,0l-1.11,2.44L8,11.54C7.61,11.72,7.61,12.28,8,12.46z');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M12,21c-3.11,0-5.85-1.59-7.46-4H6c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1H2c-0.55,0-1,0.45-1,1v4c0,0.55,0.45,1,1,1h0 c0.55,0,1-0.45,1-1v-1.7c1.99,2.84,5.27,4.7,9,4.7c4.45,0,8.27-2.64,10-6.43c0.26-0.57-0.08-1.25-0.69-1.39l0,0 c-0.45-0.1-0.93,0.11-1.12,0.54C18.77,18.83,15.64,21,12,21z');
        $l1I0->addChild($l2I5);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
