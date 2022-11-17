<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['home'],
    tags: [],
)]
final class BroadcastOnHomeRoundedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M22,6c0-1.1-0.9-2-2-2H5C4.45,4,4,4.45,4,5v0c0,0.55,0.45,1,1,1h15v2.59c0.73,0.29,1.4,0.69,2,1.17V6z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M8,9H3c-0.5,0-1,0.5-1,1v9c0,0.5,0.5,1,1,1h5c0.5,0,1-0.5,1-1v-9C9,9.5,8.5,9,8,9z M7,18H4v-7h3V18z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M17.75,16.97c0.3-0.23,0.5-0.57,0.5-0.97c0-0.69-0.56-1.25-1.25-1.25s-1.25,0.56-1.25,1.25c0,0.4,0.2,0.75,0.5,0.97v4.28 c0,0.41,0.34,0.75,0.75,0.75l0,0c0.41,0,0.75-0.34,0.75-0.75V16.97z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M17.54,13.56c0.98,0.21,1.76,1.03,1.93,2.02c0.11,0.64-0.03,1.25-0.34,1.74c-0.18,0.29-0.13,0.67,0.12,0.91l0,0 c0.34,0.33,0.9,0.29,1.16-0.12c0.51-0.82,0.73-1.83,0.53-2.9c-0.3-1.56-1.56-2.83-3.12-3.13C15.24,11.58,13,13.53,13,16 c0,0.78,0.22,1.5,0.6,2.11c0.25,0.41,0.83,0.46,1.16,0.12l0,0c0.24-0.24,0.29-0.63,0.11-0.92c-0.24-0.38-0.37-0.83-0.37-1.31 C14.5,14.45,15.93,13.22,17.54,13.56z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M16.25,9.54c-2.94,0.33-5.32,2.68-5.69,5.61c-0.23,1.82,0.29,3.51,1.3,4.82c0.27,0.35,0.8,0.37,1.12,0.06l0,0 c0.27-0.27,0.28-0.7,0.05-1c-0.8-1.05-1.2-2.43-0.95-3.89c0.34-2.03,1.95-3.67,3.98-4.05C19.22,10.5,22,12.93,22,16 c0,1.13-0.38,2.18-1.02,3.02c-0.23,0.3-0.21,0.73,0.06,1l0,0c0.31,0.31,0.84,0.3,1.11-0.06C23,18.87,23.5,17.49,23.5,16 C23.5,12.16,20.17,9.1,16.25,9.54z');
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
