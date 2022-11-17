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
    tags: ['army', 'award', 'badge', 'honor', 'medal', 'merit', 'military', 'order', 'privilege', 'prize', 'rank', 'reward', 'ribbon', 'soldier', 'star', 'status', 'tech', 'trophy', 'win', 'winner'],
)]
final class MilitaryTechRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M17,10.43V3c0-0.55-0.45-1-1-1H8C7.45,2,7,2.45,7,3v7.43c0,0.35,0.18,0.68,0.49,0.86l4.18,2.51l-0.99,2.34l-2.22,0.19 C8,16.37,7.82,16.92,8.16,17.21l1.69,1.46l-0.51,2.18c-0.1,0.43,0.37,0.77,0.75,0.54L12,20.23l1.91,1.15 c0.38,0.23,0.85-0.11,0.75-0.54l-0.51-2.18l1.69-1.46c0.33-0.29,0.16-0.84-0.29-0.88l-2.22-0.19l-0.99-2.34l4.18-2.51 C16.82,11.11,17,10.79,17,10.43z M13,12.23l-1,0.6l-1-0.6V3h2V12.23z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
