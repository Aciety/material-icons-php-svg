<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['controller', 'entertainment', 'esports', 'game', 'gamepad', 'gaming', 'hobby', 'online', 'social', 'sports', 'video'],
)]
final class SportsEsportsTwoToneIcon extends SVG
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
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M16.53,7H7.47C6.48,7,5.63,7.74,5.49,8.72L4.4,16.37c-0.03,0.21,0.05,0.35,0.13,0.44 C4.6,16.9,4.73,17,4.94,17c0.15,0,0.29-0.06,0.39-0.16L8.17,14h7.66l2.84,2.84c0.1,0.1,0.24,0.16,0.39,0.16 c0.21,0,0.34-0.1,0.42-0.19c0.08-0.09,0.16-0.23,0.13-0.44l-1.09-7.66C18.37,7.74,17.52,7,16.53,7z M11,11H9v2H8v-2H6v-1h2V8h1v2 h2V11z M15,10c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1s1,0.45,1,1C16,9.55,15.55,10,15,10z M17,13c-0.55,0-1-0.45-1-1 c0-0.55,0.45-1,1-1s1,0.45,1,1C18,12.55,17.55,13,17,13z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M21.58,16.09l-1.09-7.66C20.21,6.46,18.52,5,16.53,5H7.47C5.48,5,3.79,6.46,3.51,8.43l-1.09,7.66 C2.2,17.63,3.39,19,4.94,19h0c0.68,0,1.32-0.27,1.8-0.75L9,16h6l2.25,2.25c0.48,0.48,1.13,0.75,1.8,0.75h0 C20.61,19,21.8,17.63,21.58,16.09z M19.48,16.81C19.4,16.9,19.27,17,19.06,17c-0.15,0-0.29-0.06-0.39-0.16L15.83,14H8.17 l-2.84,2.84C5.23,16.94,5.09,17,4.94,17c-0.21,0-0.34-0.1-0.42-0.19c-0.08-0.09-0.16-0.23-0.13-0.44l1.09-7.66 C5.63,7.74,6.48,7,7.47,7h9.06c0.99,0,1.84,0.74,1.98,1.72l1.09,7.66C19.63,16.58,19.55,16.72,19.48,16.81z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[9, 8], [8, 8], [8, 10], [6, 10], [6, 11], [8, 11], [8, 13], [9, 13], [9, 11], [11, 11], [11, 10], [9, 10]]);
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGCircle(cx: '17', cy: '12', r: '1');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGCircle(cx: '15', cy: '9', r: '1');
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
