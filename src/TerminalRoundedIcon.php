<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['application', 'code', 'emulator', 'program', 'software', 'terminal'],
)]
final class TerminalRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M20,4H4C2.89,4,2,4.9,2,6v12c0,1.1,0.89,2,2,2h16c1.1,0,2-0.9,2-2V6C22,4.9,21.11,4,20,4z M20,18H4V8h16V18z M12,16 c0-0.55,0.45-1,1-1h4c0.55,0,1,0.45,1,1c0,0.55-0.45,1-1,1h-4C12.45,17,12,16.55,12,16z M6.79,9.71c0.39-0.39,1.02-0.39,1.41,0 l2.59,2.59c0.39,0.39,0.39,1.02,0,1.41l-2.59,2.59c-0.39,0.39-1.02,0.39-1.41,0c-0.39-0.39-0.39-1.02,0-1.41L8.67,13l-1.88-1.88 C6.4,10.73,6.4,10.1,6.79,9.71z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
