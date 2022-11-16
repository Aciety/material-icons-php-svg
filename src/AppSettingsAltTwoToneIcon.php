<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class AppSettingsAltTwoToneIcon extends SVG
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
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGRect(x: '7', y: '20', width: '10', height: '1');
        $l2I0->setStyle('fill', 'none');
        $l1I1->addChild($l2I0);
        $l2I1 = new SVGRect(x: '7', y: '3', width: '10', height: '1');
        $l2I1->setStyle('fill', 'none');
        $l1I1->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M21.81,12.74l-0.82-0.63c0-0.09,0-0.13,0-0.22l0.8-0.63c0.16-0.12,0.2-0.34,0.1-0.51l-0.85-1.48 c-0.07-0.13-0.21-0.2-0.35-0.2c-0.05,0-0.1,0.01-0.15,0.03l-0.95,0.38c-0.08-0.05-0.11-0.07-0.19-0.11l-0.15-1.01 C19.22,8.15,19.05,8,18.85,8h-1.71c-0.2,0-0.37,0.15-0.4,0.34L16.6,9.35c-0.03,0.02-0.07,0.03-0.1,0.05 c-0.03,0.02-0.06,0.04-0.09,0.06l-0.95-0.38c-0.05-0.02-0.1-0.03-0.15-0.03c-0.14,0-0.27,0.07-0.35,0.2l-0.85,1.48 c-0.1,0.17-0.06,0.39,0.1,0.51l0.8,0.63c0,0.09,0,0.13,0,0.23l-0.8,0.63c-0.16,0.12-0.2,0.34-0.1,0.51l0.85,1.48 c0.07,0.13,0.21,0.2,0.35,0.2c0.05,0,0.1-0.01,0.15-0.03l0.95-0.37c0.08,0.05,0.12,0.07,0.2,0.11l0.15,1.01 c0.03,0.2,0.2,0.34,0.4,0.34h1.71c0.2,0,0.37-0.15,0.4-0.34l0.15-1.01c0.03-0.02,0.07-0.03,0.1-0.05 c0.03-0.02,0.06-0.04,0.09-0.06l0.95,0.38c0.05,0.02,0.1,0.03,0.15,0.03c0.14,0,0.27-0.07,0.35-0.2l0.85-1.48 C22.01,13.08,21.97,12.86,21.81,12.74z M18,13.5c-0.83,0-1.5-0.67-1.5-1.5c0-0.83,0.67-1.5,1.5-1.5s1.5,0.67,1.5,1.5 C19.5,12.83,18.83,13.5,18,13.5z M17,18H7V6h10v1h2V3c0-1.1-0.9-2-2-2H7C5.9,1,5,1.9,5,3v18c0,1.1,0.9,2,2,2h10c1.1,0,2-0.9,2-2 v-4h-2V18z M7,3h10v1H7V3z M17,21H7v-1h10V21z');
        $l1I1->addChild($l2I2);
        $l2I3 = new SVGRect(x: '7', y: '3', width: '10', height: '1');
        $l2I3->setStyle('opacity', '.3');
        $l1I1->addChild($l2I3);
        $l2I4 = new SVGRect(x: '7', y: '20', width: '10', height: '1');
        $l2I4->setStyle('opacity', '.3');
        $l1I1->addChild($l2I4);
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
