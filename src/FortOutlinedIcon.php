<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['castle', 'fort', 'fortress', 'mansion', 'palace'],
)]
final class FortOutlinedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M21,3v2h-2V3h-2v2h-2V3h-2v4l2,2v1H9V9l2-2V3H9v2H7V3H5v2H3V3H1v4l2,2v6l-2,2v4h9v-3c0-1.1,0.9-2,2-2s2,0.9,2,2v3h9v-4 l-2-2V9l2-2V3H21z M21,19h-5v-1c0-2.21-1.79-4-4-4s-4,1.79-4,4v1H3v-1.17l2-2V8.17L3.83,7h4.34L7,8.17V12h10V8.17L15.83,7h4.34 L19,8.17v7.66l2,2V19z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
