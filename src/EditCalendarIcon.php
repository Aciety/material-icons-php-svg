<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['calendar', 'compose', 'create', 'date', 'day', 'draft', 'edit', 'editing', 'event', 'month', 'pen', 'pencil', 'schedule', 'write', 'writing'],
)]
final class EditCalendarIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12,22H5c-1.11,0-2-0.9-2-2L3.01,6c0-1.1,0.88-2,1.99-2h1V2h2v2h8V2h2v2h1c1.1,0,2,0.9,2,2v6h-2v-2H5v10h7V22z M22.13,16.99 l0.71-0.71c0.39-0.39,0.39-1.02,0-1.41l-0.71-0.71c-0.39-0.39-1.02-0.39-1.41,0l-0.71,0.71L22.13,16.99z M21.42,17.7l-5.3,5.3H14 v-2.12l5.3-5.3L21.42,17.7z');
        $doc->addChild($l0I1);
    }
}
