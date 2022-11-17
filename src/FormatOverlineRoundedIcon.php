<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['file'],
    tags: ['alphabet', 'character', 'doc', 'edit', 'editing', 'editor', 'font', 'format', 'letter', 'line', 'overline', 'sheet', 'spreadsheet', 'style', 'symbol', 'text', 'type', 'under', 'writing'],
)]
final class FormatOverlineRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M5,4c0-0.55,0.45-1,1-1h12c0.55,0,1,0.45,1,1s-0.45,1-1,1H6C5.45,5,5,4.55,5,4z M12,7c-3.87,0-7,3.13-7,7 c0,3.87,3.13,7,7,7s7-3.13,7-7C19,10.13,15.87,7,12,7z M12,18.5c-2.49,0-4.5-2.01-4.5-4.5S9.51,9.5,12,9.5s4.5,2.01,4.5,4.5 S14.49,18.5,12,18.5z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
