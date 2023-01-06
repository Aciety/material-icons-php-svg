<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['action'],
    tags: ['calendar', 'compose', 'create', 'date', 'day', 'draft', 'edit', 'editing', 'event', 'month', 'pen', 'pencil', 'schedule', 'write', 'writing'],
)]
final class EditCalendarTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGRect(x: '5', y: '6', width: '14', height: '2');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M5,10h14v2h2V6c0-1.1-0.9-2-2-2h-1V2h-2v2H8V2H6v2H5C3.89,4,3.01,4.9,3.01,6L3,20c0,1.1,0.89,2,2,2h7v-2H5V10z M5,6h14v2H5 V6z M22.84,16.28l-0.71,0.71l-2.12-2.12l0.71-0.71c0.39-0.39,1.02-0.39,1.41,0l0.71,0.71C23.23,15.26,23.23,15.89,22.84,16.28z M19.3,15.58l2.12,2.12l-5.3,5.3H14v-2.12L19.3,15.58z');
        $doc->addChild($l0I2);
    }
}
