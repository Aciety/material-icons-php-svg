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
    tags: ['?', 'assistance', 'destination', 'direction', 'help', 'info', 'information', 'listed', 'location', 'maps', 'not', 'pin', 'place', 'punctuation', 'question mark', 'stop', 'support', 'symbol'],
)]
final class NotListedLocationRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M12 2c-4.2 0-8 3.22-8 8.2 0 3.18 2.45 6.92 7.34 11.22.38.33.95.33 1.33 0C17.55 17.12 20 13.38 20 10.2 20 5.22 16.2 2 12 2zm.01 14c-.59 0-1.05-.47-1.05-1.05 0-.59.47-1.04 1.05-1.04.59 0 1.04.45 1.04 1.04 0 .58-.44 1.05-1.04 1.05zm2.51-6.17c-.63.93-1.23 1.21-1.56 1.81-.08.14-.13.26-.16.49-.05.39-.36.68-.75.68h-.03c-.44 0-.79-.38-.75-.82.03-.27.09-.57.25-.84.41-.73 1.18-1.16 1.63-1.8.48-.68.21-1.94-1.14-1.94-.61 0-1.01.32-1.26.7-.19.29-.57.39-.89.25-.42-.18-.6-.7-.34-1.07C10.03 6.55 10.88 6 12 6c1.23 0 2.08.56 2.51 1.26.36.61.58 1.73.01 2.57z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
