<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class FestivalTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: '0', width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M5.24,14.42C5.2,16.18,5.06,18.14,4.66,20h2.67c0.27-1.94,0.43-4.07,0.52-5.93C7.54,13.9,7.25,13.7,7,13.44 C6.53,13.93,5.92,14.27,5.24,14.42z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M11,11H8c0,0.83,0.67,1.5,1.5,1.5S11,11.83,11,11z');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M6,11H3c0,0.83,0.67,1.5,1.5,1.5S6,11.83,6,11z');
        $l2I2->setStyle('opacity', '.3');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M12,4.71C10.67,5.85,8.51,7.55,5.89,9h12.23C15.49,7.55,13.33,5.85,12,4.71z');
        $l2I3->setStyle('opacity', '.3');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M19.5,12.5c0.83,0,1.5-0.67,1.5-1.5h-3C18,11.83,18.67,12.5,19.5,12.5z');
        $l2I4->setStyle('opacity', '.3');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M14.5,12.5c0.83,0,1.5-0.67,1.5-1.5h-3C13,11.83,13.67,12.5,14.5,12.5z');
        $l2I5->setStyle('opacity', '.3');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGPath(d: 'M17,13.44c-0.25,0.25-0.54,0.45-0.85,0.62c0.1,1.87,0.26,4,0.52,5.93h2.67c-0.39-1.86-0.54-3.82-0.57-5.58 C18.08,14.27,17.47,13.93,17,13.44z');
        $l2I6->setStyle('opacity', '.3');
        $l1I0->addChild($l2I6);
        $l2I7 = new SVGPath(d: 'M12,2c0,0-5,5-11,7v2c0,1.49,0.93,2.75,2.24,3.26C3.2,16.76,2.92,19.69,2,22h20c-0.92-2.31-1.2-5.24-1.24-7.74 C22.07,13.75,23,12.49,23,11V9C17,7,12,2,12,2z M12,4.71c1.33,1.14,3.49,2.84,6.11,4.29H5.89C8.51,7.55,10.67,5.85,12,4.71z M3,11 h3c0,0.83-0.67,1.5-1.5,1.5S3,11.83,3,11z M7.33,20H4.66c0.39-1.86,0.54-3.82,0.57-5.58c0.68-0.15,1.29-0.49,1.76-0.98 c0.25,0.25,0.54,0.45,0.85,0.62C7.76,15.93,7.6,18.06,7.33,20z M8,11h3c0,0.83-0.67,1.5-1.5,1.5S8,11.83,8,11z M9.35,20 c0.24-1.83,0.39-3.78,0.48-5.53c0.84-0.08,1.61-0.45,2.17-1.02c0.56,0.57,1.32,0.94,2.17,1.02c0.1,1.75,0.24,3.7,0.48,5.53H9.35z M14.5,12.5c-0.83,0-1.5-0.67-1.5-1.5h3C16,11.83,15.33,12.5,14.5,12.5z M16.67,20c-0.27-1.94-0.43-4.07-0.52-5.93 c0.31-0.17,0.61-0.37,0.85-0.62c0.47,0.48,1.08,0.83,1.76,0.98c0.03,1.76,0.18,3.72,0.57,5.58H16.67z M19.5,12.5 c-0.83,0-1.5-0.67-1.5-1.5h3C21,11.83,20.33,12.5,19.5,12.5z');
        $l1I0->addChild($l2I7);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
