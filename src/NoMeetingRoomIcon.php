<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['places'],
    tags: ['building', 'disabled', 'door', 'doorway', 'enabled', 'entrance', 'home', 'house', 'interior', 'meeting', 'no', 'off', 'office', 'on', 'open', 'places', 'room', 'slash'],
)]
final class NoMeetingRoomIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M11 11h-1v2h2v-1l9.73 9.73L20.46 23 14 16.54V21H3v-2h2V7.54l-4-4 1.27-1.27L11 11zm3 .49L5.51 3H14v1h5v12.49l-2-2V6h-3v5.49z');
        $doc->addChild($l0I0);
    }
}
