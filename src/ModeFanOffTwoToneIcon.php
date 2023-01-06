<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['home'],
    tags: ['air conditioner', 'cool', 'disabled', 'enabled', 'fan', 'nest', 'off', 'on', 'slash'],
)]
final class ModeFanOffTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M4.5,10C4.42,10,4,10.03,4,10.6c0,2,0.82,3.4,2,3.4c0.51,0,0.89-0.12,2.69-0.86 c-0.07-0.2-0.12-0.41-0.15-0.62c-1.48-0.33-2.49-0.89-3.39-2.16C4.93,10.05,4.77,10,4.5,10z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M10,19.5c0,0.08,0.03,0.5,0.6,0.5c2,0,3.4-0.82,3.4-2c0-0.38-0.07-0.69-0.42-1.59l-0.97-0.97 c-0.03,0.01-0.06,0.02-0.09,0.02c-0.33,1.48-0.89,2.49-2.16,3.39C10.05,19.07,10,19.23,10,19.5z');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M13.65,5.15C13.95,4.93,14,4.77,14,4.5C14,4.42,13.97,4,13.4,4c-2,0-3.4,0.82-3.4,2 c0,0.38,0.07,0.69,0.42,1.59l1.05,1.05l0.02-0.1C11.82,7.06,12.37,6.04,13.65,5.15z');
        $l2I2->setStyle('opacity', '.3');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M18.85,13.65c0.21,0.3,0.38,0.35,0.65,0.35c0.08,0,0.5-0.03,0.5-0.6c0-2-0.82-3.4-2-3.4 c-0.51,0-0.89,0.12-2.69,0.86c0.07,0.2,0.12,0.41,0.15,0.62C16.94,11.82,17.96,12.37,18.85,13.65z');
        $l2I3->setStyle('opacity', '.3');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGGroup();
        $l3I0 = new SVGGroup();
        $l4I0 = new SVGPath(d: 'M10,6c0-1.18,1.4-2,3.4-2C13.97,4,14,4.42,14,4.5c0,0.27-0.05,0.43-0.35,0.65c-1.27,0.9-1.83,1.91-2.16,3.39l-0.02,0.1 l7.25,7.25C18.96,15.95,19.22,16,19.5,16c1.22,0,2.5-0.95,2.5-2.6C22,9.91,20.11,8,18,8c-1.06,0-1.64,0.29-3.91,1.19 c-0.19-0.14-0.4-0.27-0.62-0.37c0.25-1.03,0.61-1.53,1.33-2.04C15.61,6.21,16,5.44,16,4.5C16,3.28,15.05,2,13.4,2 c-3.08,0-4.92,1.47-5.32,3.26l2.33,2.33C10.07,6.69,10,6.38,10,6z M18,10c1.18,0,2,1.4,2,3.4c0,0.57-0.42,0.6-0.5,0.6 c-0.27,0-0.43-0.05-0.65-0.35c-0.9-1.27-1.91-1.83-3.39-2.16c-0.03-0.22-0.08-0.42-0.15-0.62C17.11,10.12,17.49,10,18,10z');
        $l3I0->addChild($l4I0);
        $l2I4->addChild($l3I0);
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M1.39,4.22l3.89,3.89C5.04,8.05,4.78,8,4.5,8C3.28,8,2,8.95,2,10.6C2,14.09,3.89,16,6,16c1.06,0,1.64-0.29,3.91-1.19 c0.19,0.14,0.4,0.27,0.62,0.37c-0.25,1.03-0.61,1.53-1.33,2.04C8.39,17.79,8,18.56,8,19.5c0,1.22,0.95,2.5,2.6,2.5 c3.08,0,4.92-1.47,5.32-3.26l3.86,3.86l1.41-1.41L2.81,2.81L1.39,4.22z M12.52,15.46c0.03,0,0.06-0.02,0.09-0.02l0.97,0.97 C13.93,17.31,14,17.62,14,18c0,1.18-1.4,2-3.4,2c-0.57,0-0.6-0.42-0.6-0.5c0-0.27,0.05-0.43,0.35-0.65 C11.63,17.96,12.18,16.94,12.52,15.46z M8.54,12.52c0.03,0.22,0.08,0.42,0.15,0.62C6.89,13.88,6.51,14,6,14c-1.18,0-2-1.4-2-3.4 C4,10.03,4.42,10,4.5,10c0.27,0,0.43,0.05,0.65,0.35C6.04,11.63,7.06,12.18,8.54,12.52z');
        $l1I0->addChild($l2I5);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
