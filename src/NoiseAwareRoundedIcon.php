<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['audio', 'aware', 'cancellation', 'music', 'noise', 'note', 'sound'],
)]
final class NoiseAwareRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
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
        $l2I0 = new SVGPath(d: 'M15.62,16.45c0.36-0.65-0.15-1.45-0.9-1.45c-0.34,0-0.68,0.16-0.84,0.47C13.72,15.78,13.38,16,13,16 c-0.43,0-0.81-0.27-0.95-0.68c-0.15-0.44-0.4-1.08-0.93-1.61l-1.36-1.36C9.28,11.87,9,11.19,9,10.5C9,9.12,10.12,8,11.5,8 c0.98,0,1.84,0.57,2.24,1.4c0.18,0.36,0.52,0.6,0.91,0.6c0.75,0,1.22-0.79,0.89-1.46C14.82,7.04,13.28,6,11.5,6 c-2.89,0-5.15,2.74-4.33,5.76c0.22,0.8,0.68,1.51,1.27,2.1l1.27,1.27c0.15,0.16,0.28,0.38,0.4,0.71c0.41,1.13,1.38,2.04,2.58,2.16 C13.95,18.11,15.07,17.46,15.62,16.45z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '13.5', cy: '12.5', r: '1.5');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGCircle(cx: '12', cy: '3', r: '1');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGCircle(cx: '12', cy: '21', r: '1');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M5.75,7.01c0.34-0.43,0.27-1.06-0.16-1.41C5.16,5.26,4.53,5.33,4.18,5.77C3.84,6.2,3.91,6.83,4.34,7.17 C4.77,7.51,5.4,7.44,5.75,7.01z');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M18.25,16.99c-0.34,0.43-0.27,1.06,0.16,1.41s1.06,0.27,1.41-0.16c0.34-0.43,0.27-1.06-0.16-1.41 C19.23,16.49,18.6,16.56,18.25,16.99z');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGPath(d: 'M4.2,13.78c-0.12-0.54-0.66-0.88-1.2-0.75s-0.88,0.66-0.75,1.2c0.12,0.54,0.66,0.88,1.2,0.75 C3.99,14.86,4.32,14.32,4.2,13.78z');
        $l1I0->addChild($l2I6);
        $l2I7 = new SVGPath(d: 'M19.8,10.22c0.12,0.54,0.66,0.88,1.2,0.75s0.88-0.66,0.75-1.2s-0.66-0.88-1.2-0.75C20.01,9.14,19.68,9.68,19.8,10.22z');
        $l1I0->addChild($l2I7);
        $l2I8 = new SVGPath(d: 'M8.53,19.21c-0.5-0.24-1.1-0.03-1.33,0.47c-0.24,0.5-0.03,1.1,0.47,1.33c0.5,0.24,1.1,0.03,1.33-0.47 C9.24,20.05,9.03,19.45,8.53,19.21z');
        $l1I0->addChild($l2I8);
        $l2I9 = new SVGPath(d: 'M15.47,4.79c0.5,0.24,1.1,0.03,1.33-0.47c0.24-0.5,0.03-1.1-0.47-1.33c-0.5-0.24-1.1-0.03-1.33,0.47 C14.76,3.95,14.97,4.55,15.47,4.79z');
        $l1I0->addChild($l2I9);
        $l2I10 = new SVGPath(d: 'M15.47,19.21c-0.5,0.24-0.71,0.84-0.47,1.33s0.84,0.71,1.33,0.47c0.5-0.24,0.71-0.84,0.47-1.33 C16.57,19.18,15.97,18.97,15.47,19.21z');
        $l1I0->addChild($l2I10);
        $l2I11 = new SVGPath(d: 'M8.53,4.79C9.03,4.55,9.23,3.96,9,3.46c-0.24-0.5-0.84-0.71-1.33-0.47S6.95,3.83,7.19,4.33S8.03,5.03,8.53,4.79z');
        $l1I0->addChild($l2I11);
        $l2I12 = new SVGPath(d: 'M21,13.03c-0.54-0.12-1.07,0.21-1.2,0.75c-0.12,0.54,0.21,1.07,0.75,1.2c0.54,0.12,1.07-0.21,1.2-0.75 C21.87,13.69,21.54,13.15,21,13.03z');
        $l1I0->addChild($l2I12);
        $l2I13 = new SVGPath(d: 'M3,10.97c0.54,0.12,1.07-0.21,1.2-0.75c0.12-0.54-0.21-1.07-0.75-1.2s-1.07,0.21-1.2,0.75C2.13,10.31,2.46,10.85,3,10.97z');
        $l1I0->addChild($l2I13);
        $l2I14 = new SVGPath(d: 'M19.66,7.17c0.43-0.34,0.5-0.97,0.16-1.41s-0.97-0.5-1.41-0.16c-0.43,0.34-0.5,0.97-0.16,1.41 C18.6,7.44,19.23,7.51,19.66,7.17z');
        $l1I0->addChild($l2I14);
        $l2I15 = new SVGPath(d: 'M4.34,16.83c-0.43,0.34-0.5,0.97-0.16,1.41c0.34,0.43,0.97,0.5,1.41,0.16c0.43-0.34,0.5-0.97,0.16-1.41 S4.77,16.49,4.34,16.83z');
        $l1I0->addChild($l2I15);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
