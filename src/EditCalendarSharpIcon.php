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
    tags: ['calendar', 'compose', 'create', 'date', 'day', 'draft', 'edit', 'editing', 'event', 'month', 'pen', 'pencil', 'schedule', 'write', 'writing'],
)]
final class EditCalendarSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M12,22H3V4h3V2h2v2h8V2h2v2h3v8h-2v-2H5v10h7V22z M22.13,16.99l1.41-1.41l-2.12-2.12l-1.41,1.41L22.13,16.99z M21.42,17.7 l-5.3,5.3H14v-2.12l5.3-5.3L21.42,17.7z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
