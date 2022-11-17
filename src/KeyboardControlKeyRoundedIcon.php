<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['hardware'],
    tags: ['control key', 'keyboard'],
)]
final class KeyboardControlKeyRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M5.71,12.71L5.71,12.71c0.39,0.39,1.02,0.39,1.41,0L12,7.83l4.88,4.88c0.39,0.39,1.02,0.39,1.41,0v0 c0.39-0.39,0.39-1.02,0-1.41l-5.59-5.59c-0.39-0.39-1.02-0.39-1.41,0l-5.59,5.59C5.32,11.68,5.32,12.32,5.71,12.71z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
