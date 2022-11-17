<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['arts', 'athlete', 'athletic', 'boxing', 'combat', 'entertainment', 'exercise', 'fighting', 'game', 'glove', 'hobby', 'martial', 'mixed', 'mma', 'social', 'sports'],
)]
final class SportsMmaOutlinedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M7,20c0,0.55,0.45,1,1,1h8c0.55,0,1-0.45,1-1v-3H7V20z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M18,7c-0.55,0-1,0.45-1,1V5c0-1.1-0.9-2-2-2H7C5.9,3,5,3.9,5,5v5.8c0,0.13,0.01,0.26,0.04,0.39l0.8,4 c0.09,0.47,0.5,0.8,0.98,0.8H17c0.55,0,1.09-0.44,1.2-0.98l0.77-3.83C18.99,11.06,19,10.93,19,10.8V9V8C19,7.45,18.55,7,18,7z M17,10.6c0,0.13-0.64,3.4-0.64,3.4H7.64c0,0-0.64-3.26-0.64-3.4V5h8v5h2V10.6z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '8', y: '7', width: '6', height: '3');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
