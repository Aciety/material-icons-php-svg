<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['places'],
    tags: ['building', 'door', 'doorway', 'entrance', 'gear', 'home', 'house', 'interior', 'office', 'open', 'preferences', 'room', 'settings'],
)]
final class RoomPreferencesTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M13,12.11V5H7v14h4.29C11.1,18.37,11,17.7,11,17C11,15.09,11.76,13.37,13,12.11 z M10,11h2v2h-2V11z');
        $l1I1->setStyle('enable-background', 'new');
        $l1I1->setStyle('opacity', '.3');
        $l0I0->addChild($l1I1);
        $l1I2 = new SVGPath(d: 'M12,13h-2v-2h2V13z M7,19V5h6v7.11c0.57-0.59,1.25-1.07,2-1.42V6h2v4h1h1V4h-4V3H5v16H3v2h9.26c-0.42-0.6-0.75-1.28-0.97-2 H7z M21.69,17.63l1.14,1l-1,1.73l-1.45-0.49c-0.32,0.27-0.68,0.48-1.08,0.63L19,22h-2l-0.3-1.49c-0.4-0.15-0.76-0.36-1.08-0.63 l-1.45,0.49l-1-1.73l1.14-1c-0.08-0.5-0.08-0.76,0-1.26l-1.14-1l1-1.73l1.45,0.49c0.32-0.27,0.68-0.48,1.08-0.63L17,12h2l0.3,1.49 c0.4,0.15,0.76,0.36,1.08,0.63l1.45-0.49l1,1.73l-1.14,1C21.77,16.87,21.77,17.13,21.69,17.63z M20,17c0-1.1-0.9-2-2-2s-2,0.9-2,2 s0.9,2,2,2S20,18.1,20,17z');
        $l0I0->addChild($l1I2);
        $doc->addChild($l0I0);
    }
}
