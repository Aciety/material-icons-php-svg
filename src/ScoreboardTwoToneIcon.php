<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['social'],
    tags: ['board', 'points', 'score', 'scoreboard', 'sports'],
)]
final class ScoreboardTwoToneIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M17.5,13.5H16v-3h1.5V13.5z M12.75,6v1.5h-1.5V6H4v12h7.25v-1.5h1.5V18H20V6H12.75z M9.5,11.5 c0,0.55-0.45,1-1,1h-2v1h3V15H5v-2.5c0-0.55,0.45-1,1-1h2v-1H5V9h3.5c0.55,0,1,0.45,1,1V11.5z M12.75,14.5h-1.5V13h1.5V14.5z M12.75,11h-1.5V9.5h1.5V11z M19,14c0,0.55-0.45,1-1,1h-2.5c-0.55,0-1-0.45-1-1v-4c0-0.55,0.45-1,1-1H18c0.55,0,1,0.45,1,1V14z');
        $l1I0->setStyle('opacity', '.3');
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M18,9h-2.5c-0.55,0-1,0.45-1,1v4c0,0.55,0.45,1,1,1H18c0.55,0,1-0.45,1-1v-4C19,9.45,18.55,9,18,9z M17.5,13.5H16v-3h1.5 V13.5z M9.5,15H5v-2.5c0-0.55,0.45-1,1-1h2v-1H5V9h3.5c0.55,0,1,0.45,1,1v1.5c0,0.55-0.45,1-1,1h-2v1h3V15z M12.75,11h-1.5V9.5h1.5 V11z M12.75,14.5h-1.5V13h1.5V14.5z M22,6v12c0,1.1-0.9,2-2,2H4c-1.1,0-2-0.9-2-2V6c0-1.1,0.9-2,2-2h3V2h2v2h6V2h2v2h3 C21.1,4,22,4.9,22,6z M20,18V6h-7.25v1.5h-1.5V6H4v12h7.25v-1.5h1.5V18H20z');
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
