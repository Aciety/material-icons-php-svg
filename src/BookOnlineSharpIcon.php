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
    tags: ['Android', 'OS', 'admission', 'appointment', 'book', 'cell', 'device', 'event', 'hardware', 'iOS', 'mobile', 'online', 'pass', 'phone', 'reservation', 'tablet', 'ticket'],
)]
final class BookOnlineSharpIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M19,1H5v22h14V1z M7,18V6h10v12H7z M16,11l0-3H8l0,3.1c0.55,0,1,0.45,1,1c0,0.55-0.45,1-1,1L8,16h8v-3c-0.55,0-1-0.45-1-1 C15,11.45,15.45,11,16,11z M12.5,14.5h-1v-1h1V14.5z M12.5,12.5h-1v-1h1V12.5z M12.5,10.5h-1v-1h1V10.5z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
