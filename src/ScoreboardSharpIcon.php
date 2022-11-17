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
    tags: ['board', 'points', 'score', 'scoreboard', 'sports'],
)]
final class ScoreboardSharpIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M17.5,13.5H16v-3h1.5V13.5z M22,4h-5V2h-2v2H9V2H7v2H2v16h20V4z M9.5,12.5h-3v1h3V15H5v-3.5h3v-1H5V9h4.5V12.5z M12.75,18 h-1.5v-1.5h1.5V18z M12.75,14.5h-1.5V13h1.5V14.5z M12.75,11h-1.5V9.5h1.5V11z M12.75,7.5h-1.5V6h1.5V7.5z M19,9v6h-4.5V9H19z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
