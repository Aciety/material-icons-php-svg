<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['bakery', 'bread', 'breakfast', 'brunch', 'croissant', 'dining', 'food'],
)]
final class BakeryDiningTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: '0', width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M7.6,8.67l-2.01,0.8c-0.22,0.09-0.34,0.31-0.31,0.54l2.4,5.98h1.23l-0.62-6.9C8.25,8.75,7.91,8.54,7.6,8.67 z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M3.07,16.1c-0.27,0.53,0.29,1.09,0.82,0.83l1.68-0.84l-1.08-2.71L3.07,16.1z');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M13.36,6.99h-2.71c-0.27,0-0.53,0.23-0.5,0.54l0.77,8.45h2.17l0.77-8.45C13.88,7.22,13.63,6.99,13.36,6.99z');
        $l2I2->setStyle('opacity', '.3');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M18.41,9.47l-2.01-0.8c-0.31-0.12-0.65,0.09-0.68,0.42l-0.62,6.9h1.23l2.4-5.98 C18.75,9.78,18.63,9.56,18.41,9.47z');
        $l2I3->setStyle('opacity', '.3');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M19.52,13.39l-1.08,2.7l1.68,0.84c0.52,0.26,1.09-0.3,0.82-0.83L19.52,13.39z');
        $l2I4->setStyle('opacity', '.3');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M20.5,10.94c0.13-0.32,0.1-0.23,0.15-0.39c0.3-1.21-0.34-2.47-1.5-2.93l-2.01-0.8c-0.46-0.18-0.95-0.21-1.41-0.12 c-0.11-0.33-0.29-0.63-0.52-0.89C14.73,5.29,14.06,5,13.36,5h-2.71C9.94,5,9.27,5.29,8.8,5.81C8.56,6.07,8.38,6.37,8.27,6.69 C7.81,6.6,7.32,6.63,6.86,6.81l-2.01,0.8c-1.16,0.46-1.8,1.72-1.5,2.93l0.15,0.38C1.1,15.55,1,15.55,1,16.38 c0,0.91,0.46,1.74,1.24,2.22c1.42,0.88,2.49,0.14,4-0.61h11.53c1.52,0.76,1.86,1.01,2.63,1.01c1,0,2.61-0.77,2.61-2.61 C23,15.54,22.88,15.51,20.5,10.94z M3.88,16.93c-0.53,0.26-1.09-0.3-0.82-0.83l1.41-2.72l1.08,2.71L3.88,16.93z M7.68,15.99 l-2.4-5.98C5.25,9.78,5.37,9.56,5.59,9.47l2.01-0.8c0.31-0.12,0.65,0.08,0.68,0.42l0.62,6.9H7.68z M13.09,15.99h-2.17l-0.77-8.45 c-0.03-0.31,0.23-0.54,0.5-0.54h2.71c0.27,0,0.53,0.23,0.5,0.54L13.09,15.99z M16.32,15.99h-1.23l0.62-6.9 c0.03-0.33,0.37-0.54,0.68-0.42l2.01,0.8c0.22,0.09,0.34,0.31,0.31,0.54L16.32,15.99z M20.12,16.93l-1.68-0.84l1.08-2.7l1.41,2.71 C21.21,16.63,20.64,17.19,20.12,16.93z');
        $l1I0->addChild($l2I5);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
